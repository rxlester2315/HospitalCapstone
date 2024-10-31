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

use App\Models\Product;

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

    $credentials = $request->only('email', 'password');

    if (Auth::attempt(array_merge($credentials, ['status' => 'Active']))) {
        $user = Auth::user();
        $dt = Carbon::now('Asia/Manila');

        // Log activity
        DB::table('activity_logs')->insert([
            'name'        => $user->name,
            'email'       => $user->email,
            'description' => 'Login',
            'date_time'   => $dt,
        ]);

        // Fetch the latest update
        $latestUpdate = Maintenance_system::latest()->first();

        // Check if the user has already seen this update
        if ($latestUpdate && $user->last_seen_update_id !== $latestUpdate->id) {
            // Store the update in session to display in the view
            session(['latestUpdate' => $latestUpdate]);

            // Update user's last seen update ID
            $user->last_seen_update_id = $latestUpdate->id;
            $user->save();
        }

        // Success notification
        Toastr::success('Login successfully', 'Success');

        // Redirect based on role
        $redirectRoutes = [
            'Super Admin' => 'Superad',
            'Admin' => 'Admin',
            'Human Resources' => 'HR',
            'Front Desk' => 'Front',
            'Nurse' => 'Nurse',
            'Doctor' => 'Doc',
            'Normal User' => 'User',
            'Guests' => 'Guests',
        ];

        return redirect()->intended($redirectRoutes[$user->role_name] ?? 'home')->with('login_success', 'Welcome back!');
    }

    // Handle failed authentication
    return back()->withErrors(['email' => 'Invalid email, password, or inactive status.']);
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

$totalproduct = Product::count();
$totaluser = User::where('status','Active')->count();
$totalticket = ticket::count();
    $alldoctor = employees::count();


        return view('Admin.home',compact('totalproduct','totaluser','totalticket','alldoctor'));
    }

public function hruser()
{
    $totalAppointments = Appointments::count();
    $pendingAppointments = Appointments::where('status', 'Pending')->count();
    $approvedAppointments = Appointments::where('status', 'Approved')->count();
    $completedAppointments = Appointments::where('status', 'Completed')->count();
    $alldoctor = employees::count();

     $attendance = DB::table('activity_logs')
        ->orderBy('created_at', 'desc')
        ->take(10) 
        ->get();

$leavelist = employees::select('name', 'Specialty', 'room', 'leave_start_date', 'leave_end_date', 'reason', 'addnote', 'status')
    ->orderBy('created_at', 'desc')
    ->take(3)
    ->get();

    return view('Hr.dashboard', compact('totalAppointments', 'pendingAppointments', 'approvedAppointments', 'completedAppointments','alldoctor','attendance','leavelist'));
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