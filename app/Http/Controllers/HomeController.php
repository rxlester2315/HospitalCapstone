<?php

namespace App\Http\Controllers;
use App\Events\Sendnotif;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Doctors;
use App\Models\Appointments;
use App\Models\Employees;
use App\Models\PatientInfo;



use Pdf;


use App\Models\User;
use Carbon\Carbon;

use Session;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Departments;

class HomeController extends Controller
{
    

    public function index(){


              $doctor=employees::all();
        return view('home.index',compact('doctor'));
      
    }


     public function create_view_appoint(){

        
        $departmentData['data'] = Departments::orderby("name","asc")
           ->select('id','name')
           ->get();
 
        // Load index view
        return view('Normal.create_appointments')->with("departmentData",$departmentData);

    }


     public function getEmployees($departmentid=0){
 
    // Fetch Employees by Departmentid

        $empData['data'] = Employees::orderby("name","asc")
        ->select('id','name')
        ->where('department',$departmentid)
        ->get();

        return response()->json($empData);
      
    }

       public function appointments(Request $request){



        $employee = Employees::findOrFail($request->sel_emp);
        $department = Departments::findOrFail($request->sel_depart);
         $data = new appointments;
         $data ->name=$request->name;
         $data ->email=$request->email;
         $data ->date=$request->date;
         $data ->time=$request->time;
         $data ->departments=$request->sel_depart;
         $data ->employees=$request->sel_emp;
         $data ->phone=$request->number;
         $data ->message=$request->message;
         $data ->status='Pending';
         $data ->completed='Observation';


         $data->departments = $department->name;
        $data->employees = $employee->name;

    

        if(Auth::id()){

            $data->userid=Auth::user()->id;


        }

        $data->save();
         event(new Sendnotif($data));


        return redirect()->back()->with('message','Appointment Recorded Will Be Back Soon!');

        


 
 
 

 

    } 



    public function myappointment(){

        if(Auth::id()){

            $user_id=Auth::user()->id;

            $appoint=appointments::where('userid',$user_id)->get();
             return view('Normal.my_appointment',compact('appoint'));
        }






        else{
            return redirect()->back();
        }




       
    }


      public function cancel_appointment($id){

        $data=appointments::find($id);
        $data->delete();

        return redirect()->back();

    }


public function user_receipt()
{
    // Get the authenticated user's ID
    $patientId = auth()->user()->id;

    // Fetch all receipts for the specific patient using 'userid' column
    $receipts = Appointments::where('userid', $patientId)->get();

    // Pass the receipts to the view
    return view('Normal.medicine_receipt', compact('receipts'));
}

public function archivereceipt($id)
{
    $patientId = auth()->user()->id;

    $receipt = Appointments::where('id', $id)
                            ->where('userid', $patientId)
                            ->first();

    if (!$receipt) {
        return redirect()->back()->with('error', 'Receipt not found or you are not authorized to perform this action.');
    }

    $receipt->list_medicine = []; 
    $receipt->note_med_receipts = null;
    $receipt->date_receipt = null; 

    $receipt->save();

    return redirect()->back()->with('message', 'Medicine receipt updated successfully.');
}




    public function view_info($id){


        $receipt = Appointments::findOrFail($id);


        if (!$receipt) {
        return redirect()->back()->with('error', 'Appointment not found.');
    }

    $medicines = explode('; ', $receipt->list_medicine);


        return view('Normal.view_medicine',compact('receipt','medicines'));

        

    }
    

    public function dl_medicine($id){

  

    $receipt = Appointments::find($id);

  if (!$receipt) {
        abort(404, 'Patient record not found.');
    }
    $medicines = explode('; ', $receipt->list_medicine);
    

    $pdf = Pdf::loadView('Normal.view_medicine', compact('receipt','medicines'));


    return $pdf->download('PatientInformation.pdf');


}





public function NormalUserProf(){
    

    $userId = auth()->user()->id;
    $userinfo = PatientInfo::where('user_id', $userId)->first();

       if (!$userinfo) {
        // If no profile found, pass a flag to indicate that
        return view('Normal.register-profile', ['profileExists' => false]);
    }
     // If profile exists, pass it to the view

    return view('Normal.profile',compact('userinfo'));

}

public function NormalEditProfView(){
    $userId = auth()->user()->id;
        $info = PatientInfo::where('user_id', $userId)->first();

    return view('Normal.profile', [
        'profileExists' => true,
        'patientInfo' => $info
    ]);


}

public function NormalEditStore(Request $request){
    $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'number' => 'required|digits_between:7,11',
        'address' => 'required|string|max:255',
        'email' => 'required|string|email|max:255'
    ]);

    $userId = auth()->user()->id;

    // Check if patient info exists
    $data = PatientInfo::where('user_id', $userId)->first();

    if (!$data) {
        // If no profile exists, create a new one
        $data = new PatientInfo();
        $data->user_id = $userId;  // Ensure that the user_id is set
    }

    // Set/update the data
    $data->firstName = $request->firstName;
    $data->lastName = $request->lastName;
    $data->birthdate = $request->birthdate;
    $data->number = $request->number;
    $data->email = $request->email;
    $data->address = $request->address;
    $data->save();

    return redirect()->route('view.normal.prof', ['user_id' => $userId])->with('message', 'Profile saved successfully');
}

public function updateNormal(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'number' => 'required|digits_between:7,11',
        'address' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
    ]);

    // Get the authenticated user's ID
    $userId = auth()->user()->id;

    // Use updateOrCreate to either update the existing record or create a new one
    $info = PatientInfo::updateOrCreate(
        ['user_id' => $userId],  // Find PatientInfo by user_id
        [
            'firstName' => $validatedData['firstName'],
            'lastName' => $validatedData['lastName'],
            'birthdate' => $validatedData['birthdate'],
            'number' => $validatedData['number'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'user_id' => $userId // Ensure the user_id is saved correctly
        ]
    );

    // Return a redirect or response
    return redirect()->back()->with('message', 'Profile updated successfully');
}

public function updateNormalView()
{
    $userId = auth()->user()->id;
    $info = PatientInfo::where('user_id', $userId)->first();

    return view('Normal.edit-profile', compact('info'));
}


public function change_password(){
    $userId = auth()->user()->id;
    $change = User::findOrFail($userId);
    return view('Normal.change-password', compact('change'));
}

public function changepass_store(Request $request){

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







}