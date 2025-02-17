<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Message;
use App\Models\Messagez;
use App\Models\ChatSession;

use App\Models\Messagess;
use App\Models\appointments;
use App\Models\Departments;

use Auth;
use App\Events\MessageSent;
use App\Models\PatientInfo;


use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

class GuessController extends Controller
{
    public function guessregister(){
        return view('home.guess_account');
    }



public function create_account(Request $request)
{
    // Validate the input
    $request->validate([
        'name'      => 'required|string|max:255',
        'email'     => 'required|string|email|max:255|unique:users',
        'password'  => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required',
    ]);

    // Create a new user with 'Active' status
    $user = User::create([
        'name'      => $request->name,
        'email'     => $request->email,
        'role_name' => 'Guests',  
        'password'  => Hash::make($request->password),
        'status'    => 'Active', 
    ]);

    // Log in the newly registered user
    Auth::login($user);

    // Redirect to the guest account/dashboard or wherever you want
    return redirect()->route('Guests')->with('success', 'Guest Account Created and Logged In');
}













// public function sendMessage(Request $request)
// {
//     $message = $request->input('message');
//         $userId = auth()->user()->id;

//     $receiverId  = 21; // Admin ID
    
//     $newMessage = Message::create([
//         'sender_id' => Auth::id(),
//         'receiver_id' => $receiverId,
//         'message' => $message,
//     ]);

//     // Broadcast event with 3 parameters
//     broadcast(new GuessMessage($message, $userId , $receiverId))->toOthers();
// \Log::info('Message broadcasted: ', ['message' => $message]);

//     return response()->json(['success' => true, 'message' => $newMessage]);
// }


    


//     public function getMessages()
//     {
//         // Get messages between user and admin
//         $messages = Message::where('sender_id', Auth::id())
//                     ->orWhere('receiver_id', Auth::id())
//                     ->get();



                    


//         return response()->json($messages);
//     }








// public function startChat()
//     {
//         // Start chat if session doesn't exist for this user
//         $chatSession = ChatSession::firstOrCreate(['user_id' => auth()->id()]);
//         return view('home.guess.guess_index', compact('chatSession'));
//     }





public function startChat()
{
    $chatSession = ChatSession::firstOrCreate(['user_id' => auth()->id()]);

    return view('home.guess.chat', compact('chatSession'));
}





    public function sendMessage(Request $request, $sessionId)
    {
        $message = Messagess::create([
            'chat_session_id' => $sessionId,
            'user_id' => auth()->id(),
            'message' => $request->message,
            'from_admin' => false,
        ]);

  $adminId = 30;

    broadcast(new MessageSent($message, auth()->id(), $adminId))->toOthers();

        return response()->json(['status' => 'Message sent']);
    }


public function fetchMessages($sessionId)
{
    $chatSession = ChatSession::findOrFail($sessionId);
    $messages = $chatSession->messages()->get();

    return response()->json(['messages' => $messages]);
}






public function register_view(){
 $userId = auth()->user()->id;
    $guessinfo = PatientInfo::where('user_id', $userId)->first();

    if (!$guessinfo) {
        // If no profile found, pass a flag to indicate that
        return view('home.guess.register', ['profileExists' => false]);
    }

    return view('home.guess.profile', ['guessinfo' => $guessinfo]);
}


public function registerGuest(Request $request){

    $validatedData = $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'number' => 'required|string|max:11',
        'email' => 'required|email|max:255',
        'address' => 'required|string|max:500',
    ]);

    $userId = auth()->user()->id;
     $data = PatientInfo::where('user_id', $userId)->first();

      if (!$data) {
       
        $data = new PatientInfo();
        $data->user_id = $userId;  
    }

   
    $data->firstName = $request->firstName;
    $data->lastName = $request->lastName;
    $data->birthdate = $request->birthdate;
    $data->number = $request->number;
    $data->email = $request->email;
    $data->address = $request->address;
    $data->save();

return redirect()->route('Guests');




}


public function GuestViewProf() {
    $userId = auth()->user()->id;
    $guessinfo = PatientInfo::where('user_id', $userId)->first();

    if (!$guessinfo) {
        // If no profile found, pass a flag to indicate that
        return view('home.guess.register', ['profileExists' => false]);
    }

    return view('home.guess.profile', ['guessinfo' => $guessinfo]);
}



public function UpdateGuestProf(){
          $userId = auth()->user()->id;
    $guessinfo = PatientInfo::where('user_id', $userId)->first();

    return view('home.guess.edit-profile',compact('guessinfo'));

    
}

public function UpdatestoreGuest(Request $request){

       // Validate the request
    $validatedData = $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'number' => 'required|digits_between:7,11',
        'address' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
    ]);

    $userId = auth()->user()->id;


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


    return redirect()->back()->with('message', 'Profile updated successfully');



}


public function change_passwordGuest(){
    $userId = auth()->user()->id;
    $change = User::findOrFail($userId);
    return view('home.guess.change-password', compact('change'));
}


public function changepass_storeGuest(Request $request){

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



  public function guestappointz(){

        if(Auth::id()){

            $user_id=Auth::user()->id;

            $appoint=appointments::where('userid',$user_id)->get();
             return view('home.guess.guests_appoint',compact('appoint'));
        }






        else{
            return redirect()->back();
        }




       
    }


    public function guestappointments(Request $request)
{
    // Check if the user already has an appointment on the selected date
    $existingAppointment = appointments::where('userid', Auth::id())
        ->where('date', $request->date)
        ->first();

    if ($existingAppointment) {
        return redirect()->back()->with('error', 'You already have an appointment on this date.');
    }

    $employee = Employees::findOrFail($request->sel_emp);
    $department = Departments::findOrFail($request->sel_depart);

    $data = new appointments;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->date = $request->date;
    $data->time = $request->time;
    $data->departments = $department->name;
    $data->employees = $employee->name;
    $data->phone = $request->number;
    $data->message = $request->message;
    $data->status = 'Pending';
    $data->completed = 'Observation';

    if (Auth::id()) {
        $data->userid = Auth::user()->id;
    }

    $data->save();
    event(new Sendnotif($data));

    return redirect()->route('success');
}


     public function create_appoint_guestz(){

        
        $departmentData['data'] = Departments::orderby("name","asc")
           ->select('id','name')
           ->get();
 
        // Load index view
        return view('home.guess.create_appoint_guest')->with("departmentData",$departmentData);

    }


    public function succes_message(){

        return view("home.guess.success-redirect");
    }


























}