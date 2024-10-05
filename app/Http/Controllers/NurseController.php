<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\User;
use App\Models\Appointments;



class NurseController extends Controller
{
    

 public function cardiology() {
    $cardiology = Employees::where('specialty', 'Cardiology')->get(); // Execute the query to get the data

    return view('Nurse.departments.cardiology', compact('cardiology'));
}

 public function ortho() {
    $orthopaedic = Employees::where('specialty', 'Orthopaedic Surgery')->get(); // Execute the query to get the data

    return view('Nurse.departments.Orthopaedic', compact('orthopaedic'));
}


public function neuro() {
    $neuro = Employees::where('specialty', 'Neurology')->get(); // Execute the query to get the data

    return view('Nurse.departments.neurology', compact('neuro'));
}


public function surgery() {
    $surgerys = Employees::where('specialty', 'General Surgery')->get(); // Execute the query to get the data

    return view('Nurse.departments.surgery', compact('surgerys'));
}

public function list_pending(){

$pending = Appointments::where('status','Pending')->get();


return view('Nurse.list-pending',compact('pending'));
    

}


 public function displaylist()
    {
        return view('Nurse.Todayappoint', ['appointment' => null]);
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

    $listapprove =Appointments::where('status','Approved')->get();

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

    $patient = User::where('role_name','Normal User')->get();


    return view('Nurse.patient-list',compact('patient'));
}
 









}