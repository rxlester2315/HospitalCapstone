<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\User;
use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;
class SuperAdController extends Controller
{
  


 public function index()
    {
        if (Auth::user()->role_name=='Super Admin')
        {
              $data = DB::table('users')->get();
            return view('Super.usermanagement.user_control',compact('data'));
        }
        else
        {
            return redirect()->route('sadview');
        }
        
    }


      public function viewDetail($id)
    {  
        if (Auth::user()->role_name=='Super Admin')
        {
            $data = DB::table('users')->where('id',$id)->get();

            $roleName = DB::table('role_type_users')->get();
            $userStatus = DB::table('user_types')->get();
            return view('Super.usermanagement.view_user',compact('data','roleName','userStatus'));            
          
         


        }
        else
        {
            return redirect()->route('sadview');
        }
    }



      public function activityLog()
    {
        $activityLog = DB::table('user_activity_logs')->get();
        return view('Super.usermanagement.user_activity_logs',compact('activityLog'));
    }


      public function activityLogInLogOut()
    {
        $activityLog = DB::table('activity_logs')->get();
        return view('Super.usermanagement.activity_log',compact('activityLog'));
    }


     public function profile()
    {
        return view('Super.usermanagement.profile_user');
    }


     public function addNewUser()
    {
        return view('Super.usermanagement.add_new_user');
    }

      public function addNewUserSave(Request $request)
     {

        $request->validate([
            'name'      => 'required|string|max:255',
            'image'     => 'required|image',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'required|min:11|numeric',
            'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $image = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $image);

        $user = new User;
        $user->name         = $request->name;
        $user->avatars       = $image;
        $user->email        = $request->email;
        $user->phone_number = $request->phone;
        $user->role_name    = $request->role_name;
        $user->password     = Hash::make($request->password);
 
        $user->save();

        Toastr::success('Create new account successfully :)','Success');
        return redirect()->route('userManagement');
    }


     public function update(Request $request)
    {
        $id           = $request->id;
        $fullName     = $request->fullName;
        $email        = $request->email;
        $phone_number = $request->phone_number;
        $status       = $request->status;
        $role_name    = $request->role_name;

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

         
        $old_image = User::find($id);

        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($old_image->avatars=='photo_defaults.jpg')
        {
            if($image != '')
            {
                $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $image_name);
            }
        }
        else{
            
            if($image != '')
            {
                $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $image_name);
                unlink('images/'.$old_image->avatars);
            }
        }

     
        
        
        $update = [

            'id'           => $id,
            'name'         => $fullName,
            'avatars'       => $image_name,
            'email'        => $email,
            'phone_number' => $phone_number,
            'status'       => $status,
            'role_name'    => $role_name,
        ];

         $activityLog = [

          
            'name'         => $fullName,
            'email'        => $email,
            'phone_number' => $phone_number,
            'status'       => $status,
            'role_name'    => $role_name,
            'modify_user'  => 'Update',
            'date_time'    => $todayDate,
        ];




     
        DB::table('user_activity_logs')->insert($activityLog);
        User::where('id',$request->id)->update($update);


         Toastr::success('User updated successfully :)','Success');
        return redirect()->route('userManagement');
    }

    


    



   
}