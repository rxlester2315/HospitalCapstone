<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class ForgotPasswordController extends Controller
{

    public function forgot_pass(){

        return view('Auth.forgotpassword');
    }

   public function forgetpass_post(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Generate a random token
    $token = Str::random(64);

    // Insert the reset password record into the database
    DB::table('reset_password')->insert([
        'email' => $request->email,
        'token' => $token,
        'created_at' => Carbon::now(),
    ]);

    // Send the reset password email with the token
    Mail::send('Auth.email.email-forget', ['token' => $token], function ($message) use ($request) {
        $message->to($request->email);
        $message->subject("Reset Password");
    });

    // Redirect with success message
    return redirect()->route('forgotpw')->with('success', 'Please Check your Email');
}


    public function resetpw($token){
        return view('Auth.Reset-password',compact('token'));



    }

    public function resetPwpost(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation'=> 'required'
        ]);


        $updatePassword = DB::table('reset_password')
        ->where([
            'email' =>$request->email,
            'token' =>$request->token
        ])->first();

        if(!$updatePassword){

        return redirect()->route('reset')->with('error','Invalid');

          }

         User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);

         DB::table('reset_password')->where(['email' =>$request->email])->delete();
         return redirect()->route('login')->with('success','Change Password Success');
    }
      
}
