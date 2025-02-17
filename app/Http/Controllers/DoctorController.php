<?php

namespace App\Http\Controllers;
use App\Models\Receipt;
use Illuminate\Support\Facades\Storage;
use Pdf;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\ticket;
use App\Models\Employees;
use App\Models\DayOff;
use App\Models\PresentDay;
use App\Models\EmployeeInfo;
use App\Models\Employee;
use Auth;
use App\Models\User;
use App\Models\ChatSession;
use App\Models\ChatSessionss;
use App\Models\patientsmessagess;
use Pusher\Pusher;

use Illuminate\Support\Facades\Hash;



use App\Models\DocReciept;


use Illuminate\Support\Str;
use Notification;

use App\Notifications\TicketEmail;




class DoctorController extends Controller
{

 

 



public function listAppointment()
{
    $userId = auth()->user()->id;
    $doctor = Employees::find($userId);
    $doctorName = $doctor->name;

    
    $data = Appointments::where('status', 'Approved') 
                        ->where('employees', $doctorName) 
                        ->where('completed', 'Observation') 
                        ->orderBy('created_at', 'desc') 
                        ->get();

    return view('Doctor.listappoint', compact('data', 'doctor'));
}





public function completeAppointment($id)
{
    // Find the appointment by its ID
    $appointment = Appointments::findOrFail($id);

    // Update the 'completed' field to mark as completed
    $appointment->completed = 'Completed'; // Set completed to true (1)

    // Save the changes to the database
    $appointment->save();

    // Redirect back to the list or show a success message
    return redirect()->back()->with('success', 'Appointment marked as completed.');
}



    public function sendticket(){
        $doctor = Auth::user();

      return view('Doctor.send-ticket',compact('doctor'));
    }



public function send_ticket(Request $request)
{
    $data = new Ticket;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->description = $request->description;
    $data->priority = $request->priority;
    $data->status = 'open';
    $data->submitted_at = now();  // Set the submitted timestamp

    if (Auth::check()) {
        $data->rolename = Auth::user()->role_name; 
    } else {
        $data->rolename = 'none'; 
    }

    $data->ticket_number = 'TCKT-' . strtoupper(Str::random(8));
    $data->save();

    Notification::route('mail', $data->email)->notify(new TicketEmail($data));

    return redirect()->back()->with('message', 'Message Ticket Sent Successfully');
}



public function create_receipt(){


}


  // public function showCreateForm()
  //   {
  //       // Generate auto-incrementing Patient ID
  //       $lastReceipt = Receipt::orderBy('id', 'desc')->first();
  //       $nextId = $lastReceipt ? $lastReceipt->id + 1 : 1;
  //       $patientId = 'PAT-' . str_pad($nextId, 5, '0', STR_PAD_LEFT);


  //       return view('Doctor.receipt', compact('patientId'));


  //   }


public function showCreateForm($id)
{
    $data = Appointments::find($id);

    if (!$data) {
        return redirect()->back()->with('error', 'Appointment not found.');
    }

    return view('Doctor.receipt', compact('data')); // No message or redirection here
}




















 public function receipt_store(Request $request)
{
    

    
    // Validation rules
    $request->validate([
        'date_receipt' => 'required|date',
        'medicine.*.name' => 'required|string',
        'medicine.*.dosage' => 'required|string',
        'medicine.*.quantity' => 'required|integer|min:1',
        'doctor_signature_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);
    // Find the existing appointment using the provided ID
    $receipt = Appointments::find($request->input('id'));     

       if (!$receipt) {
        return redirect()->back()->with('error', 'Record not found.');
    }

        $doctor_signature_image =$request->file;
        $image=time().'.'.$doctor_signature_image->getClientOriginalExtension();
        $request->file->move('signature_folder',$image);
        $receipt->doctor_signature_image=$image;
 
        // Combine medicine details into a single string
        $medicineDetails = [];
        foreach ($request->input('medicine') as $medicine) {
            $medicineDetails[] = $medicine['name'] . ' (' . $medicine['dosage'] . ') - Quantity: ' . $medicine['quantity'];
        }
        $listOfMedicine = implode('; ', $medicineDetails); // Join medicine details

        // Update other fields
        $receipt->date_receipt = $request->date_receipt;
        $receipt->note_med_receipts = $request->note_med_receipts;
        $receipt->list_medicine = $listOfMedicine;

        // Save the receipt
        $receipt->save();

     
        return redirect()->back()->with('message', 'Receipt is sent to the Patient.');
 
   
    }


public function patient_receipt(){

$data = Receipt::all();

return view('Doctor.list_patient_receipt',compact('data'));

}

public function view_patient($id){

$data=Receipt::find($id);
return view('Doctor.viewpatient',compact('data'));


}

public function dl_view($id){

$data = Receipt::find($id);

    if (!$data) {
        abort(404, 'Patient record not found.');
    }

    $pdf = Pdf::loadView('Doctor.viewpatient', compact('data'));

    return $pdf->download('PatientInformation.pdf');


}


public function successPat()
{
    $userId = auth()->user()->id;

    // Find the doctor using the authenticated user's ID
    $doctor = Employees::where('id', $userId)->first();

    if ($doctor) {
        $doctorName = $doctor->name;

        // Get appointments for the specific doctor
        $data = Appointments::where('status', 'Approved')
                            ->where('employees', $doctorName)
                            ->get();

        return view('Doctor.success', compact('data', 'doctor'));
    } else {
        // Handle the case where no doctor is found
        return redirect()->back()->with('error', 'Doctor not found');
    }
}


public function list_sent_receipt(){


    $userId = auth()->user()->id;

    $doctor = Employees::where('id',$userId)->first();

if($doctor){
    $doctorName = $doctor->name;

     $data = Appointments::where('status', 'Approved')
                            ->where('employees', $doctorName)
                            ->get();

                                    return view('Doctor.list_receipt', compact('data', 'doctor'));

               

}else {
        // Handle the case where no doctor is found
        return redirect()->back()->with('error', 'Doctor not found');
    }

}

    
public function make_sched(){
       $userId = auth()->user()->id;

    $doctor = Employees::where('id',$userId)->first();


    return view('Doctor.makesched',compact('doctor'));
}


public function store_sched(Request $request) {
    // Get the work days and days off from the request
    $workDays = $request->input('present_days', []);
    $daysOff = $request->input('day_off', []);
     $shiftStartTime = $request->input('shift_start_time');
    $shiftEndTime = $request->input('shift_end_time');

    // Get the authenticated user's ID
    $userId = auth()->user()->id;

    // Find the doctor by ID
    $doctor = Employees::where('id', $userId)->first();

    if ($doctor) {
        // Store the present days and days off in the doctor record
        $doctor->present_days = json_encode($workDays);  // Store as JSON or a comma-separated string
        $doctor->dayoff = json_encode($daysOff);  // Store as JSON or a comma-separated string
        $doctor->shift_start_time = $shiftStartTime;
        $doctor->shift_end_time = $shiftEndTime;
        $doctor->sched_status ='Pending';
        
        $doctor->save();

        return redirect()->back()->with('message', 'Schedule updated successfully');
    } else {
        return redirect()->back()->with('error', 'Doctor not found');
    }
}
  public function view_leaves(){

        $userId = auth()->user()->id;


    $doctor = Employees::where('id', $userId)->first();


        return view('Doctor.doctor_leaves',compact('doctor'));
    }

    public function leave_store(Request $request){
           $leaveStart = $request ->input('leave_start_date');
    $leavesEnd = $request ->input('leave_end_date');
    $reasontype = $request ->input('reason');
    $leaveNote = $request ->input('addnote');
    $makestatus = 'pending';




         $userId = auth()->user()->id;
    $doctor = Employees::where('id', $userId)->first();


   

    if($doctor){

   $doctor->leave_start_date = $leaveStart;
    $doctor->leave_end_date = $leavesEnd;
    $doctor->reason = $reasontype;
    $doctor->addnote =$leaveNote;
    $doctor->status =$makestatus;
    
   
        $doctor->save();
                return redirect()->back()->with('message', 'Schedule updated successfully');


    }  else {
        return redirect()->back()->with('error', 'Doctor not found');
    }


    }


public function profile(){
    $userId = auth()->user()->id;
    $doctor = EmployeeInfo::where('id', $userId)->first();
    

    return view('Doctor.profile',compact('doctor'));
}

public function edit_doc(){
     $userId = auth()->user()->id;
    $info = EmployeeInfo::where('id', $userId)->first();

    return view('Doctor.profile_edit',compact('info'));
}
public function edit_store(Request $request)
{
    $request->validate([
        'fullName' => 'required|string',
        'email' => 'required|string|email',
        'phoneNum' => 'required|digits_between:7,11',
        'Department' => 'required|string',
        'address' => 'required|string',
        'file' => 'nullable|mimes:jpg,jpeg,png|max:2048'
    ]);

    $userId = auth()->user()->id;
    $info = EmployeeInfo::where('id', $userId)->first();


    if ($request->hasFile('file')) {
        $avats = $request->file;
        $imagename = time() . '.' . $avats->getClientOriginalExtension();
        $request->file->move('profiledoc', $imagename);
        $info->avats = $imagename;
    }
    
    $info->fullName = $request->fullName;
    $info->email = $request->email;
    $info->phoneNum = $request->phoneNum;
    $info->Department = $request->Department;
    $info->address = $request->address;
    $info->birthdate = $request->birthdate;

    $info->save();
    return redirect()->route('profiless', ['id' => $userId]);


}

public function register_prof(Request $request){
     $userId = auth()->user()->id;
    // Check if a record already exists for the authenticated user
    $doctor = EmployeeInfo::where('id', $userId)->first();
    


    if (!$doctor) {
        // If no record exists, create a new one
        
        $doctor = new EmployeeInfo();
        $doctor->id = $userId; // Associate the new row with the authenticated user ID

            if ($request->hasFile('file')) {
        $avats = $request->file;
        $imagename = time() . '.' . $avats->getClientOriginalExtension();
        $request->file->move('profiledoc', $imagename);
        $info->avats = $imagename;
    }
    $doctor->fullName = $request->fullName;
    $doctor->email = $request->email;
    $doctor->phoneNum = $request->phoneNum;
    $doctor->Department = $request->Department;
    $doctor->address = $request->address;
    $doctor->birthdate = $request->birthdate;

        $doctor->save();
    }
    return view('Doctor.profile', compact('doctor'));

}


public function todayappointview(){



        return view('Doctor.today-appointment',['appointment' => null]);

}

public function todayappointments(Request $request){

      $request->validate([
        'filter_date' => 'required|date',
    ]);
     $filterDate = $request->input('filter_date');
     $appointment = Appointments::whereDate('date', $filterDate)
                                 ->where('status', 'Approved')
                                 ->get();




    return view('Doctor.today-appointment',compact('appointment'));
}


public function record_complete() {
     $completed = Appointments::where('completed','completed')->get();

    return view('Doctor.record-complete',compact('completed'));
}





public function change_passwordDoc(){
    $userId = auth()->user()->id;
    $change = User::findOrFail($userId);
    return view('Doctor.change-password', compact('change'));
}


public function changepass_storeDoc(Request $request)
{
    // Validate the input
    $validatedData = $request->validate([
        'password' => 'required|string|max:255',
        'Newpass' => 'required|string|min:8|confirmed',
    ], [
        'Newpass.confirmed' => 'The new password and confirmation password must match.',
    ]);

    // Get the authenticated user
    $user = auth()->user();

    // Check if the current password matches
    if (!Hash::check($request->password, $user->password)) {
        return back()->withErrors(['password' => 'Your current password is incorrect.']);
    }

    // Hash the new password and save it
    $user->password = Hash::make($request->Newpass);
    $user->save();

    // Flash a success message
    session()->flash('message', 'Password successfully changed. You will be redirected to the login page.');

    return redirect()->back();
}


public function recordview() {

   $authUserName = Auth::user()->name;


  $completed = Appointments::where('status', 'Approved')
                         ->whereIn('completed', ['Completed','Discharged'])
                         ->where('employees', $authUserName)  
                         ->with('employee')
                         ->get();


    return view('Doctor.appointment-complete', compact('completed'));
}


public function sendmessage(Request $request, $id)
{
    // Find the appointment
    $appointment = Appointments::with('user')->find($id);

    if (!$appointment) {
        return redirect()->back()->with('error', 'Appointment not found.');
    }

    $userId = $appointment->user->id; // Get the patient ID
    $authUserId = auth()->id(); // Get the authenticated doctor's ID
    $message = $request->input('message', 'Hello Gooday');

    // Fetch authenticated user
    $authUser = User::find($authUserId);
    if (!$authUser) {
        return redirect()->back()->with('error', 'Authenticated user not found.');
    }

    // Save the message
    $chatMessage = new patientsmessagess();
    $chatMessage->from = $authUserId;  // Doctor is the sender
    $chatMessage->to = $userId;        // Patient is the receiver
    $chatMessage->message = $message;
    $chatMessage->doctor_id = $authUserId; // Explicitly set doctor_id
    $chatMessage->patient_id = $userId;    // Explicitly set patient_id
    $chatMessage->save();

    // Broadcast using Pusher
  $pusher = new Pusher(
    env('PUSHER_APP_KEY'),       // This retrieves the key from your .env file
    env('PUSHER_APP_SECRET'),    // This retrieves the secret from your .env file
    env('PUSHER_APP_ID'),        // This retrieves the ID from your .env file
    ['cluster' => env('PUSHER_APP_CLUSTER'), 'useTLS' => true]  // This retrieves the cluster
);


    $data = [
        'from' => $authUserId,
        'message' => $message,
        'to' => $userId,
        'doctor_name' => $authUser->name,
        'senderName' => auth()->user()->name
    ];

    $pusher->trigger('chat-channel', 'message-sent', $data);

    return view('Doctor.chat-patient', [
        'appointment' => $appointment,
        'userId' => $appointment->user->id
    ]);
}

public function remove_appointment($id)
{
    $appoint = Appointments::find($id);

    if ($appoint) {
        $appoint->delete();
        // Optionally, you could add a success message to the session
        session()->flash('success', 'Appointment removed successfully.');
    } else {
        // Handle the case where the appointment doesn't exist
        session()->flash('error', 'Appointment not found.');
    }

    return redirect()->back();
}


public function schedule_sub() {
    $authUserId = auth()->id();

    $pending = Employees::where('sched_status', 'Pending')
        ->where('id', $authUserId)
        ->get();

    $approve = Employees::where('sched_status', 'Approved')
        ->where('id', $authUserId)
        ->first();

    $rejected = Employees::where('sched_status', 'Rejected')
        ->where('id', $authUserId)
        ->get();

    return view('Doctor.submited-request', compact('pending', 'approve', 'rejected'));
}



public function patientchatview(){

    $authUserName = Auth::user()->name;


  $completed = Appointments::where('status', 'Approved')
                         ->whereIn('completed', ['Completed','Observation'])
                         ->where('employees', $authUserName)  
                         ->with('employee')
                         ->get();

    return view('Doctor.patient-list-chat',compact('completed'));
}

public function rejectappoint($id){
    $rejectapp = Appointments::find($id);
    $rejectapp->status ='Rejected';
    $rejectapp->save();

    return redirect()->back()->with('message','Appointment Has been Reject');
}





























}