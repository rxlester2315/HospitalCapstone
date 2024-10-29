<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\ticket;

use App\Models\User;
use App\Models\Maintenance_system;

use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;
use Auth;
use App\Notifications\TicketResponse;
use App\Notifications\EmailNotification;

use Notification;
class SuperAdController extends Controller
{
  

public function index_admin()
{
    $user = Auth::user(); 

    if ($user->role_name === 'Admin') {
        return view('Admin.home');  
    } elseif ($user->role_name === 'Human Resources') {
        return view('Hr.dashboard');  
    
    } elseif ($user->role_name === 'Front Desk') {
        return view('Front-desk.home'); 

    }

    elseif ($user->role_name === 'Doctor') {
        return view('Doctor.home');

    }

    elseif ($user->role_name === 'Nurse') {
        return view('Nurse.home'); 

    }
    elseif ($user->role_name === 'Normal User') {
        return view('Normal.home');  


    }

      elseif ($user->role_name === 'Guests') {
        return view('home.guess.guess_index');  // Return the user view

    }
    
    else {
        return view('Super.home');  // Default to Super Admin view or other roles
    }
}


public function index()
{
    if (Auth::user()->role_name == 'Super Admin')
    {
        // Fetch only users that are not soft deleted
        $data = DB::table('users')->whereNull('deleted_at')->get();
        return view('Super.usermanagement.user_control', compact('data'));
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

    $dt = Carbon::now('Asia/Manila');
    $todayDate = $dt->toDayDateTimeString();

    // Get the old user data
    $oldUser = User::find($id);

    // Handle image update logic here...

    // Prepare the update data
    $update = [
        'id'           => $id,
        'name'         => $fullName,
        'avatars'      => $image_name ?? $oldUser->avatars, // Handle image logic here
        'email'        => $email,
        'phone_number' => $phone_number,
        'status'       => $status,
        'role_name'    => $role_name,
    ];

    // Prepare change tracking
    $fieldLabels = [
        'name'         => 'Full Name',
        'email'        => 'Email',
        'phone_number' => 'Phone Number',
        'status'       => 'Status',
        'role_name'    => 'Role Name',
        'password'     => 'Password', // Add password to tracked fields
    ];

    $changes = [];

    // Check if any fields changed
    if ($oldUser->name != $fullName) {
        $changes[] = $fieldLabels['name'];
    }
    if ($oldUser->email != $email) {
        $changes[] = $fieldLabels['email'];
    }
    if ($oldUser->phone_number != $phone_number) {
        $changes[] = $fieldLabels['phone_number'];
    }
    if ($oldUser->status != $status) {
        $changes[] = $fieldLabels['status'];
    }
    if ($oldUser->role_name != $role_name) {
        $changes[] = $fieldLabels['role_name'];
    }

    // Password update handling
    if ($request->filled('password')) { // Check if a password was provided
        // Validate and update password
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        // Update the password field
        $update['password'] = Hash::make($request->password);

        // Log that the password has changed
        $changes[] = $fieldLabels['password'];
    }

    // Only log if there are changes
    if (!empty($changes)) {
        $editor = auth()->user(); // Get the currently authenticated user
        $activityLog = [
            'name'         => $fullName,
            'email'        => $email,
            'phone_number' => $phone_number,
            'status'       => $status,
            'role_name'    => $role_name,
            'editor_id'    => $editor->id,
            'edit_info'    => implode(', ', $changes), // Record the fields that changed
            'date_time'    => $todayDate,
        ];

        // Insert into user_activity_logs table
        DB::table('user_activity_logs')->insert($activityLog);
    }

    // Update the user record
    User::where('id', $id)->update($update);

    return redirect()->route('userManagement')->with('success', 'User updated successfully.');
}


    


public function setarchives($id)
{
    // Find the user by ID
    $data = User::find($id);

    // Check if the user exists
    if ($data) {
        $data->status = 'Disable';
        $data->save();

        $data->delete();

        return back()->with('success', 'User has been archived and status updated to disabled.');
    }

    return back()->with('error', 'User not found.');
}



    public function listrestore(){
         $deletedUsers = User::onlyTrashed()->get();
    
    return view('Super.usermanagement.restore', ['deletedUsers' => $deletedUsers]);
  

    }

    public function restoreDeleteAd($id){

            $user = User::onlyTrashed()->find($id);
 if ($user) {
        $user->restore();
        $user->status = 'Active';
        $user->save();

        
        return back()->with('success', 'User restored successfully.');
    }

     return redirect()->back();
    }
    
public function updatepasswordview($id) { // Accept the user ID as a parameter

    $selectuser = User::find($id);
    
    if (!$selectuser) {
        return redirect()->back()->with('error', 'User not found.');
    }

    return view('Super.usermanagement.update-password', compact('selectuser'));
}

public function updatepassword(Request $request,$id){

       $validator = Validator::make($request->all(), [
        'password' => 'required|min:8|confirmed',
    ]);


      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

        $selectuser = User::findOrFail($id);
        $selectuser->password = Hash::make($request->password);  // Hash the new password
    $selectuser->save();

        return redirect()->route('user.reset', $id)->with('success', 'Password updated successfully');




}

public function inpersonate_view() {
    $alluser = User::where('role_name', '!=', 'Super Admin')->get();
    return view('Super.inpersonate-account', compact('alluser'));
}

public function impersonate($id)
{
    $user = User::find($id);

    // Check if the user exists
    if ($user) {
        // Impersonate the user
        Auth::user()->impersonate($user);

        // Manually set a session variable to track impersonation
        session(['impersonated_by' => Auth::id()]);

        // Redirect based on role
        if ($user->role_name === 'Admin') {
            return redirect()->route('adminss');
        } elseif ($user->role_name === 'Front Desk') {
            return redirect()->route('frontss');
        } elseif ($user->role_name === 'Human Resources') {
            return redirect()->route('hrss');
        } elseif ($user->role_name === 'Doctor') {
            return redirect()->route('docss');
        } elseif ($user->role_name === 'Nurse') {
            return redirect()->route('nursses');
        } elseif ($user->role_name === 'Normal User') {
            return redirect()->route('userss');
        } elseif ($user->role_name === 'Guests') {
            return redirect()->route('Guests');
        } else {
            return redirect()->route('default.dashboard');
        }
    }

    return redirect()->back()->withErrors('User not found.');
}




public function leave()
{
    // Check if user is impersonating
    if (session()->has('impersonated_by')) {
        // Attempt to leave impersonation
        Auth::user()->leaveImpersonation();
        
        // Clear the impersonation session variable
        session()->forget('impersonated_by');
        
        // Redirect to the super admin dashboard
        return redirect()->route('superadmin.dashboard'); // Update with the correct route
    }

    // If not impersonating, redirect somewhere else
    return redirect()->route('home'); // Update as needed
}



public function listupdate()
{
    return view('Super.maintenance-update');
}

public function updatestore(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'maintenance_date' => 'nullable|date',
        'descriptions' => 'nullable|string',
        'bugs' => 'nullable|string',
        'effect' => 'nullable|string',
    ]);

    // Create a new instance of Maintenance_system
    $listupdate = new Maintenance_system();

    // Assign the validated data to the model
    $listupdate->maintenance_date = $validatedData['maintenance_date'];
    $listupdate->descriptions = $validatedData['descriptions'];
    $listupdate->bugs = $validatedData['bugs'];
    $listupdate->effect = $validatedData['effect'];

    // Save the model to the database
    $listupdate->save();

    // Redirect or return a response after saving
    return redirect()->route('update.list')->with('success', 'Update saved successfully!');
}


public function alltickets() {
    $ticketfrmadmin = ticket::where('frmadmin', '!=', 'fixed')->where('status', 'open')->get();

    return view('Super.ticket-super', compact('ticketfrmadmin'));
}






public function issuetickets($id){

    $ticketselect = ticket::find($id);

      if (!$ticketselect) {
        return redirect()->back()->with('error', 'Ticket not found.');
    }
    

    return view('Super.view-ticket',compact('ticketselect'));
}


public function checkingissue(Request $request, $id){

    $dataz = ticket::find($id);

    if (!$dataz) {
        return redirect()->back()->with('error', 'Ticket not found.');
    }

    $dataz->status = $request->status;
    $dataz->reply = $request->reply;
    $dataz->save();

Notification::route('mail', $dataz->email)->notify(new TicketResponse($dataz));

    return redirect()->back()->with('message','Message Ticket Sent Successfully');
}

   
}