<?php

namespace App\Http\Controllers;
use App\Events\Sendnotif;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

use App\Models\Doctors;
use App\Models\Appointments;
use App\Models\Employees;


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
        return view('home.create_appointment')->with("departmentData",$departmentData);

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






    
}