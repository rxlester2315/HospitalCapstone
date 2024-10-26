<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Doctors;
use App\Models\Employees;
use Auth;
use DB;
use App\Models\Maintenance_system;
use App\Models\User;
use App\Models\EmployeeInfo;
use App\Models\ticket;

use App\Models\PatientInfo;
use App\Models\Appointments;

use Carbon\Carbon;
use Session;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    
    public function login()
    {

    return view('Auth.login');
    }


    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        $email= $request->email;
        $password = $request->password;
        $dt = Carbon::now('Asia/Manila');
        $todayDate  = $dt->toDayDateTimeString();

         $activityLog = [

            'name'        => $email,
            'email'       => $email,
            'description' => 'Login',
            'date_time'   => $dt,
        ];
 if (Auth::attempt(['email'=>$email,'password'=>$password,'status'=>'Active','role_name'=>'Super Admin'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully ','Success');
            return redirect()->intended('Superad');
        }elseif (Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Admin'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully ','Success');
            return redirect()->intended('Admin');
        }elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Human Resources'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully ','Success');
            return redirect()->intended('HR');

        }
          elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Front Desk'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully ','Success');
            return redirect()->intended('Front');

        }

        elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Nurse'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully ','Success');
            return redirect()->intended('Nurse');

        }
        
        elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Doctor'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully ','Success');
            return redirect()->intended('Doc');

        }elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Normal User'])) {

            Toastr::success('Hi Welcome Back Patient ','Success');

            return redirect()->intended('User');

        }

         elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Guests'])) {

            Toastr::success('Hi Welcome Back  ','Success');

            return redirect()->intended('Guests');

        }
    

   
        
        else{
           return redirect('login')->with('wrong','Invalid Password or Email Please double check');
        }
        

        

          if (Auth::attempt(['email' => $email, 'password' => $password])) {
        
    $user = Auth::User();
      
    // Now you can differentiate based on roles
    if ($user->hasRole('Admin')) {
        // Redirect to admin dashboard or show admin-specific content


        return redirect('Admin');

    } elseif ($user->hasRole('Human Resources')) {

        return redirect('HR');

        } elseif ($user->hasRole('Normal User')) {

        return redirect('User');

    }   elseif  ($user->hasRole('Doctor')){

                return redirect('Doc');

    }else if ($user->hasRole('Super Admin')) {

        return redirect('Superad');

    }
    else if($user->hasRole('Guests')){
        return redirect('Guests');
    }

     else if($user->hasRole('Front Desk')){
        return redirect('Front');
    }

       else if($user->hasRole('Nurse')){
        return redirect('Nurse');
    }
    

    
    

    else {
        
        return redirect();
    }
} else {
   
    return back()->withErrors(['email' => 'Invalid credentials']);
}

    }


    public function logout(){

        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');


         $name       = $user->name;
        $email      = $user->email;
        $dt = Carbon::now('Asia/Manila');

        $todayDate  = $dt->toDayDateTimeString();

        
        $activityLog = [

            'name'        => $name,
            'email'       => $email,
            'description' => 'Logout',
            'date_time'   => $dt,
        ];

       DB::table('activity_logs')->insert($activityLog);
        Auth::logout();
        Toastr::success('Logout successfully ','Success');
        return redirect('/login');

    }

   

    public function Normaluser()
{
    $doctor = employees::all();

    // Get logged-in user ID
    $userId = auth()->user()->id;

    // Fetch the patient information where user_id matches logged-in user's ID
    $data = PatientInfo::where('user_id', $userId)->first();

    // Check if a record exists
    $hasRecord = $data !== null;

    // Pass data to the view
    return view('Normal.home', compact('data', 'doctor', 'hasRecord'));
}


    public function Adminuser(){

        return view('Admin.home');
    }

public function hruser()
{
    $totalAppointments = Appointments::count();
    $pendingAppointments = Appointments::where('status', 'Pending')->count();
    $approvedAppointments = Appointments::where('status', 'Approved')->count();
    $completedAppointments = Appointments::where('status', 'Completed')->count();
    $alldoctor = employees::count();

    return view('Hr.dashboard', compact('totalAppointments', 'pendingAppointments', 'approvedAppointments', 'completedAppointments','alldoctor'));
}


    public function Docview(){
         $userId = auth()->user()->id;
            $doctor = EmployeeInfo::where('id', $userId)->first();
            $hasRecord = $doctor !== null;

        return view('Doctor.home',compact('doctor','hasRecord'));
    }

      public function sadview(){

     $datas = ticket::where('status','open')->get();
      $numcsolve= ticket::where('status','Solved')->get();
      $numbcrit = ticket::where('priority','Critical Severity')->get();
        $numbcrit = ticket::where('priority','Critical Severity')->get();
        $numbmode = ticket::where('priority','Moderate Severity')->get();

       $latestUpdate = Maintenance_system::orderBy('created_at', 'desc')->first();
    $activitylogsss = DB::table('user_activity_logs')->count();

    $loginnum = DB::table('activity_logs')->count();
$totaluser = User::count();
$totaltix = ticket::count();



        return view('Super.home',compact('datas','numcsolve','numbcrit','numbmode','latestUpdate','activitylogsss','loginnum','totaluser','totaltix'));
    }


    public function guview(){
        $doctor=employees::all();

    $userId = auth()->user()->id;
    $guess = User::where('id', $userId)->first();
    

        return view('home.guess.guess_index',compact('doctor','guess'));

    }


  public function frontdeskview() {
    $listguest = User::where('role_name', 'Guests')->count();
    $noappoint = Appointments::all()->count();
    $approveappoint = Appointments::where('status', 'Approved')->count();
    $activeUser = User::where('status', 'Active')->count();

        $listguestss = User::where('role_name', 'Guests')->get();
        $pending = Appointments::where('status', 'Pending')->get();



 

    return view('Front-desk.home', compact('listguest', 'noappoint', 'approveappoint', 'activeUser','listguestss','pending'));
}



public function nurseview()
{
    $totalappoint = Appointments::all()->count();
    $approveappoint = Appointments::where('status', 'Approved')->count();
    $pending = Appointments::where('status', 'Pending')->count();
    $verifiedpatients = User::where('role_name', 'Normal User')->count();
    
    // Limit to the most recent 5 patients that have arrived
    $assespatients = Appointments::where('arrive_status', 'Arrived')
        ->latest() // Order by latest arrival
        ->take(5) // Limit to 5 records
        ->get();

    // Get images from the faces directory
    $imagePath = public_path('nursess/assets/images/faces');
    $images = array_diff(scandir($imagePath), ['..', '.']); // Exclude . and ..

    return view('Nurse.home', compact('totalappoint', 'approveappoint', 'pending', 'verifiedpatients', 'assespatients', 'images'));
}



    


}