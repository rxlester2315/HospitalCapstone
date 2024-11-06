<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\User;
use App\Models\Appointments;

use App\Models\ticket;
use Illuminate\Support\Str;
use Notification;

use App\Notifications\TicketEmail;
use Illuminate\Support\Facades\Auth;

class NurseController extends Controller
{
    






public function list_pending(){

$pending = Appointments::where('status','Pending')
->orderBy('created_at','desc')
->get();


return view('Nurse.list-pending',compact('pending'));
    

}


 public function displaylist()
    {
            $appointment = Appointments::all();

        return view('Nurse.Todayappoint', compact('appointment'));
    }


public function today_appoint(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'filter_date' => 'required|date',
    ]);

    // Get the date from the request
    $filterDate = $request->input('filter_date');

    // Query appointments based on the date and approved status
    $appointment = Appointments::whereDate('date', $filterDate)
                                 ->where('status', 'Approved')
                                 ->get();

    return view('Nurse.Todayappoint', compact('appointment'));
}


public function list_approve(){

    $listapprove =Appointments::where('status','Approved')
    ->orderBy('created_at','desc')
    ->get();

return view('Nurse.list-approve-appoint',compact('listapprove'));

}


public function display_arive()
    {
        return view('Nurse.arriving-time', ['appointment' => null]);
    }


public function arrive_time(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'filter_date' => 'required|date',
    ]);

    // Get the date from the request
    $filterDate = $request->input('filter_date');

    // Query appointments based on the date, approved status, and null time_arrive and ampm
    $appointment = Appointments::whereDate('date', $filterDate)
                                ->where('status', 'Approved')
                                ->whereNull('time_arrive') // Only show those who haven't arrived yet
                                ->whereNull('ampm')
                                ->get();

    return view('Nurse.arriving-time', compact('appointment'));
}


public function patient_time($id)
{
    $patient = Appointments::find($id);
    
    if (!$patient) {
        return redirect()->back()->with('error', 'Appointment not found.');
    }

    return view('Nurse.patient-setime', compact('patient'));
}

public function submittime_arrive(Request $request, $id)
{
    // Validate the time and ampm fields
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
    return redirect()->route('arrive.store')->with('success', 'Arrival time successfully recorded.');
}

public function recordPatientView(){

    // Fetch records where 'time_arrive' is not null and not an empty string
    $record = Appointments::whereNotNull('time_arrive')
                          ->where('time_arrive', '!=', '')
                          ->get();

    return view('Nurse.record-patient', compact('record'));
}




public function patient_listss(){

    $patient = User::where('role_name','Normal User')
    ->orderBy('created_at','desc')
    ->get();


    return view('Nurse.patient-list',compact('patient'));
}

public function appointments_list(){

    $approveapp = Appointments::where('status','Approved')
    ->orderBy('created_at','desc')
    ->get();

    return view('Nurse.patient-approve',compact('approveapp'));


}
public function remarkpatients($id) {
    $selectpatients = Appointments::find($id);
    if (!$selectpatients) {
        return redirect()->back()->with('error', 'Patient not found');
    }
    return view('Nurse.remark-patients', compact('selectpatients'));
}

public function remark(Request $request)
{
    // Validate the request
    $request->validate([
        'diseases' => 'required|string|max:255',
        'remarks' => 'required|string',
        'completed' => 'required|string',
    ]);

    // Find the existing appointment by the provided patient ID (hidden field required in form)
    $patient = Appointments::find($request->input('appointment_id'));
    
    if (!$patient) {
        return redirect()->back()->with('error', 'Appointment not found');
    }

    // Update the appointment details
    $patient->diseases = $request->diseases;
    $patient->remarks = $request->remarks;
    $patient->completed = $request->completed;

    $patient->save();

    // Redirect with success message
    return redirect()->route('appoint.remark')->with('message', 'Remark Successful');
}

public function filterAppointments(Request $request)
{
    // Get the department from the form submission
    $department = $request->input('department');

    // If a department is selected, filter the appointments by department
    if ($department) {
        $approveapp = Appointments::where('departments', $department)->orderBy('created_at','desc')->get();
    } else {
        // Otherwise, show all approved appointments
        $approveapp = Appointments::all();
    }

    // Pass the filtered appointments to the view
    return view('Nurse.patient-approve', compact('approveapp'));
}


public function assessment(){

     
     $assesment = Appointments::where('arrive_status','Arrived')
     ->orderBy('created_at','desc')
     ->get();

    return view('Nurse.patient-assessment',compact('assesment'));


}



public function selected_patients($id){

    $selecteduser = Appointments::find($id);

    if(!$selecteduser){
     return redirect()->back()->with('error', 'Patient not found');



    }

    return view('Nurse.assesment-view',compact('selecteduser'));
}


public function patientassement(Request $request) {
    $request->validate([
        'mobility' => 'required|string|max:255',
        'allergies' => 'required|string|max:255',
        'painlevel' => 'required|string|max:255',
        'mentalstatus' => 'required|string|max:255',
        'bloodpressure' => 'required|string|max:255',
        'Hearrate' => 'required|string|max:255',
        'Weight' => 'required|string|max:255',
        'Height' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'age' => 'required|integer|min:1|max:999',


    ]);

    $patient = Appointments::find($request->input('appointment_id'));

    if (!$patient) {
        return redirect()->back()->with('error', 'Appointment not found');
    }

    // Correctly accessing the properties without using the '$' symbol
    $patient->mobility = $request->mobility;
    $patient->allergies = $request->allergies;
    $patient->painlevel = $request->painlevel;
    $patient->mentalstatus = $request->mentalstatus;
    $patient->bloodpressure = $request->bloodpressure;
    $patient->Hearrate = $request->Hearrate;
    $patient->Weight = $request->Weight;
    $patient->Height = $request->Height;
    $patient->age = $request->age;
    $patient->gender = $request->gender;

    $patient->save();

    return redirect()->back()->with('message', 'Assessment has been recorded');
}


public function nurse_ticket()
{
    $nurse = Auth::user(); 
    return view('Nurse.send-ticket-nurse', compact('nurse'));
}







 public function nurseticket_store(Request $request) {
    $data = new Ticket; 
    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->description = $request->description;
    $data->priority = $request->priority;
     $data->status = 'open';
    $data->submitted_at = now(); 

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
















}