<?php

namespace App\Http\Controllers;
use App\Models\Appointments;
use App\Models\User;
use Illuminate\Http\Request;
use Notification;
use App\Models\ticket;
use Illuminate\Support\Str;
use App\Models\Messagess;
use App\Models\PatientInfo;

use App\Models\ChatSession;
use App\Events\MessageSent;

use App\Notifications\VerifiedNotification;
use App\Notifications\TicketEmail;


class FrontDeskController extends Controller
{
    


public function patientview(){

    $listpatient = Appointments::all();

    return view('Front-desk.list-appointment',compact('listpatient'));
}


public function patient_record() {

    $patientrecord = User::where('role_name', 'Normal User')->get();
    return view('Front-desk.list-patient', compact('patientrecord'));
}



  public function displayData()
    {
        // You can pass an empty collection or null as appointments initially
        return view('Front-desk.today-schedule', ['appointments' => null]);
    }



  public function sendDataDate(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'filter_date' => 'required|date',
        ]);

        // Get the date from the request
        $filterDate = $request->input('filter_date');

        // Query appointments based on the date
        $appointments = Appointments::whereDate('date', $filterDate)->get();

        // Return the view with the filtered appointments
        return view('Front-desk.today-schedule', compact('appointments', 'filterDate'));
    }


    public function unverified(){

        $guestuser = User::where('role_name','Guests')->get();

        return view('Front-desk.unverified-patient',compact('guestuser'));
    }

       public function verified(){

        $verifieduser = User::where('role_name','Normal User')->get();

        return view('Front-desk.verified-user',compact('verifieduser'));
    }


    public function listarchived(){

    $archived = User::onlyTrashed()->get();
        $archivedtotal = User::onlyTrashed()->count();
        return view('Front-desk.archived-user', compact('archived','archivedtotal'));





    }


    public function viewticket(){

        return view('Front-desk.send-ticket');


    }



public function send_ticketss (Request $request){

$data= new ticket;
$data ->name=$request->name;
$data ->email=$request->email;
$data ->subject=$request->subject;
$data ->description=$request->description;
$data ->priority=$request->priority;

if (Auth::check()) {
        $data->rolename = Auth::user()->role_name; 
    } else {
        $data->rolename = 'none'; 
    }

$data->ticket_number = 'TCKT-' . strtoupper(Str::random(8));



$data->save();

Notification::route('mail', $data->email)->notify(new TicketEmail($data));


return redirect()->back()->with('message','Message Ticket Sent Successfully');

}



















public function listChats()
    {
       $chatSessions = ChatSession::with('user')->get();
        return view('Front-desk.live-chat', compact('chatSessions'));
    }

    public function viewChat($sessionId)
    {
        $chatSession = ChatSession::findOrFail($sessionId);
        return view('Front-desk.live-chat', compact('chatSessions'));
    }






    public function sendMessage(Request $request, $sessionId)
{
    $message = Messagess::create([
        'chat_session_id' => $sessionId,
        'user_id' => $request->user_id,  // kinukuha yung user id
        'message' => $request->message,
        'from_admin' => true,
    ]);

    $adminId = auth()->id();
    
    // nag send ng message sa brodcasting
    broadcast(new MessageSent($message, $adminId, $request->user_id))->toOthers();

    return response()->json(['status' => 'Message sent!']);
}


    public function fetchMessages($sessionId)
{
    $chatSession = ChatSession::findOrFail($sessionId);
    $messages = $chatSession->messages()->get();
    $userId = $chatSession->user_id;

    return response()->json(['messages' => $messages, 'user_id' => $userId]);
}



public function req_unverified(){

   $unverified = PatientInfo::whereHas('user', function($query) {
        $query->where('role_name', '!=', 'Normal User'); // yung mga hinde user or mga guest andito
    })->get();

     $unverifiedtotal = PatientInfo::whereHas('user', function($query) {
        $query->where('role_name', '!=', 'Normal User'); // yung mga hinde user or mga guest andito
    })->count();

  return view('Front-desk.list-unverified',compact('unverified','unverifiedtotal')); 

}


public function verifyUser($id)
{
    // hinahanap yung id or kinukuha


    // hinahanap yung id or kinukuha
    $patient = PatientInfo::findOrFail($id);

    // Find the related user through the relationship
    $user = $patient->user; //kinukuha yung current user base sa id
    $sendemail = $user->email;

// check if nag exist ba yung user
    if ($user) {
        $user->role_name = 'Normal User'; 
        $user->save(); // save to sa database
        
    }
Notification::route('mail', $sendemail)->notify(new VerifiedNotification($user->name));

    return redirect()->back()->with('success', 'User verified successfully.');
}




public function list_pend(){

$pending = Appointments::where('status','Pending')->get();
$pendingtotal = Appointments::where('status','Pending')->count();


return view('Front-desk.list-pending-appoint',compact('pending','pendingtotal'));
    

}


public function display_arrives(){

    return view('Front-desk.arriving-times',['appointment'=>null]);
    
}

public function arrive_times_today(Request $request){
 $request->validate([
        'filter_date' => 'required|date',
    ]);
 $filterDate = $request->input('filter_date');

    // Query appointments based on the date, approved status, and null time_arrive and ampm
    $appointment = Appointments::whereDate('date', $filterDate)
                                ->where('status', 'Approved')
                                ->whereNull('time_arrive') // Only show those who haven't arrived yet
                                ->whereNull('ampm')
                                ->get();
return view('Front-desk.arriving-times',compact('appointment'));

}



public function arrive_set($id){

     $patient = Appointments::find($id);
    
    if (!$patient) {
        return redirect()->back()->with('error', 'Appointment not found.');
    }

    return view('Front-desk.arrived-set-time', compact('patient'));

}


public function subtime_arrive(Request $request, $id){

     $request->validate([
        'time' => 'required|date_format:H:i', 
        'ampm' => 'required|string|in:AM,PM',
    ]);

    // Find the appointment by ID
    $appointment = Appointments::findOrFail($id);

    // Update the time_arrive and ampm fields
    $appointment->time_arrive = $request->input('time');
    $appointment->ampm = $request->input('ampm');

    // Save the changes to the database
    $appointment->save();

    // Redirect back to the list of appointments
    return redirect()->route('arrives.time')->with('success', 'Arrival time successfully recorded.');
}








public function arriveappoint() {
    $allapprove = Appointments::where('status', 'Approved')
        ->where(function($query) {
            $query->where('arrive_status', '!=', 'Arrived')
                  ->orWhereNull('arrive_status');
        })
        ->get();

          $allapprovetotal = Appointments::where('status', 'Approved')
        ->where(function($query) {
            $query->where('arrive_status', '!=', 'Arrived')
                  ->orWhereNull('arrive_status');
        })
        ->count();

    return view('Front-desk.patient-arrive-list', compact('allapprove','allapprovetotal'));
}



public function mark_arrive($id) {
    // Find the appointment by ID
    $mark = Appointments::find($id);

    // Check if the appointment exists
    if ($mark) {
        $mark->arrive_status = 'Arrived';
        $mark->save();

    } 
 return redirect()->back()->with('message','Appointment marked as arrived');

}

    
}