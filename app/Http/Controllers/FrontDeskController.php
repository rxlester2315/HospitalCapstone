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
        return view('Front-desk.archived-user', compact('archived'));





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
  return view('Front-desk.list-unverified',compact('unverified')); 

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




    
}