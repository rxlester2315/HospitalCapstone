<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Doctors;
use App\Models\Employees;
use Auth;
use DB;
use App\Models\User;

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
          $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

         $activityLog = [

            'name'        => $email,
            'email'       => $email,
            'description' => 'Has Login',
            'date_time'   => $todayDate,
        ];
 if (Auth::attempt(['email'=>$email,'password'=>$password,'status'=>'Active','role_name'=>'Super Admin'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully :)','Success');
            return redirect()->intended('Superad');
        }elseif (Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Admin'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully :)','Success');
            return redirect()->intended('Ad');
        }elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Human Resources'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully :)','Success');
            return redirect()->intended('HR');

        }elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Doctor'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully :)','Success');
            return redirect()->intended('Doc');

        }elseif(Auth::attempt(['email'=>$email,'password'=>$password,'status'=> 'Active' ,'role_name'=>'Normal User'])) {

            Toastr::success('Hi Welcome Back Patient :)','Success');

            return redirect()->intended('User');

        }
        
        else{
            Toastr::error('fail, WRONG USERNAME OR PASSWORD :)','Error');
            return redirect('login');
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
    

    else {
        
        return redirect();
    }
} else {
    // Authentication failed
    return back()->withErrors(['email' => 'Invalid credentials']);
}

    }


    public function logout(){

        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');


         $name       = $user->name;
        $email      = $user->email;
        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        
        $activityLog = [

            'name'        => $name,
            'email'       => $email,
            'description' => 'Has Logged out',
            'date_time'   => $todayDate,
        ];

       DB::table('activity_logs')->insert($activityLog);
        Auth::logout();
        Toastr::success('Logout successfully :)','Success');
        return redirect('/login');

    }

   

     public function Normaluser(){


        $doctor=employees::all();
    

        return view('Normal.home',compact('doctor'));
    }

    public function Adminuser(){

        return view('Admin.dashboard');
    }

     public function hruser(){

        return view('HR.dashboard');

    }

    public function Docview(){

        return view('Doctor.home');
    }

      public function sadview(){

        return view('Super.home');
    }
}