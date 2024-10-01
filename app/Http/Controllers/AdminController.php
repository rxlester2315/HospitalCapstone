<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;
use App\Models\Messagess;
use App\Models\ChatSession;




class AdminController extends Controller
{
    

    public function view(){

        return view('Admin.home');
    }

   public function usermanage()
{
    // Correct approach using whereIn
    $data = User::whereIn('role_name', ['Normal User', 'Doctor'])->get();

    return view('Admin.usermanage', ['data' => $data]);
}

public function editmanage($id){

        $data=User::find($id);

return view('Admin.edit_manage',compact('data'));
}


public function update_manage(Request $request, $id)
{
    // Validate incoming request data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone_number' => 'required|numeric|digits:11',
        'status' => 'required|in:active,disabled',
    ]);

    // Find the user by ID
    $user = User::find($id);

    // If user is not found, return with an error message
    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Update user fields
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone_number = $request->phone_number;
    $user->status = $request->status;

    // Save the updated user data
    if ($user->save()) {
        return redirect()->route('profiles',['id' =>$id])->with('success', 'User updated successfully');
    } else {
        return redirect()->back()->with('error', 'Failed to update user');
    }
}

public function archive($id){

$data =User::find($id);

$data->delete();
return back()->with('success', 'User has Been in Archived .');

}


public function listarch(){

     // Retrieve all users that have been soft deleted
    $deletedUsers = User::onlyTrashed()->get();
    
    // Pass the deleted users to the view
    return view('Admin.list_archive', ['deletedUsers' => $deletedUsers]);

}


// public function archive_retrieve(Request $request)
// {
//     $request->validate([
//         'user_id' => 'required|integer|exists:users,id',
//     ]);

//     // Retrieve user withTrashed (to include soft-deleted ones)
//     $user = User::withTrashed()->find($request->input('user_id'));

//     // Check if the user is soft-deleted
//     if ($user) {
//         if ($user->trashed()) {
//             // User is soft-deleted
//             return view('Admin.usermanage', ['data' => User::all(), 'user' => $user]);
//         } else {
//             // User exists but is not soft-deleted
//             return back()->with('error', 'User is not soft-deleted.');
//         }
//     } else {
//         // User does not exist (unlikely to reach here due to validation)
//         return back()->with('error', 'User does not exist.');
//     }
// }


public function restoreUserById($id)
{
    $user = User::onlyTrashed()->find($id);

    if ($user) {
        $user->restore();
        return back()->with('success', 'User restored successfully.');
    }

     return redirect()->back();

}



// public function getConversations()
//     {
//         // Get distinct users who have messaged the admin
//         $users = Message::select('sender_id')
//                         ->distinct()
//                         ->where('receiver_id', 21) // Admin ID
//                         ->get();

//         return response()->json($users);
//     }


    




//     public function getUserMessages($userId)
//     {
//         // Get messages between admin and a specific user
//         $messages = Message::where(function ($query) use ($userId) {
//             $query->where('sender_id', $userId)
//                   ->orWhere('receiver_id', $userId);
//         })->get();

//         return response()->json($messages);
//     }


// public function replyToUser(Request $request, $userId)
// {
//     $message = $request->input('message');
//     $senderId = auth()->user()->id;

//     $message = Message::create([
//         'sender_id' => auth()->id(),
//         'receiver_id' => $userId,
//         'message' => $request->message,
//     ]);

//     // Broadcast event with 3 parameters
//     broadcast(new GuessMessage($message, $senderId, $userId))->toOthers();
//     \Log::info('Message broadcasted: ', ['message' => $message]);


//     return response()->json($message);
// }




// public function listChats()
// {
//     // Fetch all chat sessions with users
//     $chatSessions = ChatSession::with('user')->get();
    
//     // Pass only chatSessions when no specific chat is selected
//     return view('Admin.home', compact('chatSessions'));
// }

// public function viewChat($sessionId)
// {
//     // Fetch all chat sessions for the sidebar
//     $chatSessions = ChatSession::with('user')->get();
    
//     // Fetch the specific chat session using the session ID
//     $chatSession = ChatSession::findOrFail($sessionId);
    
//     // Pass both the chat sessions and the specific chat session to the view
//     return view('Admin.home', compact('chatSessions', 'chatSession'));
// }







//  public function listChats()
//     {
//         $chatSessions = ChatSession::with('user')->get();
//         return view('Admin.chatss', compact('chatSessions'));
//     }

//     public function viewChat($sessionId)
//     {
//         $chatSession = ChatSession::findOrFail($sessionId);
//         return view('Admin.chatss', compact('chatSessions'));
//     }

//   public function sendMessage(Request $request, $sessionId)
// {
//     $message = Messagess::create([
//         'chat_session_id' => $sessionId,
//         'user_id' => $request->user_id,  // Correctly capture the user_id from the request
//         'message' => $request->message,
//         'from_admin' => true,
//     ]);

//     $adminId = auth()->id();
    
//     // Broadcasting the message to others, passing both adminId and userId
//     broadcast(new MessageSent($message, $adminId, $request->user_id))->toOthers();

//     return response()->json(['status' => 'Message sent!']);
// }


//     public function fetchMessages($sessionId)
// {
//     $chatSession = ChatSession::findOrFail($sessionId);
//     $messages = $chatSession->messages()->get();
//     $userId = $chatSession->user_id;

//     return response()->json(['messages' => $messages, 'user_id' => $userId]);
// }


public function addstaf(){

    return view('Admin.add-doctor');
}

public function add_doctors(Request $request){

    $employees=new employees;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorsimage',$imagename);
        $employees->image=$imagename;


        $employees->name=$request->name;
        $employees->specialty=$request->specialty;
        $employees->phone=$request->number;
        $employees->room=$request->room;
        $employees->department=$request->dep;


        $employees->save();

return redirect()->back()->with('message','Doctor Added Successfully');
}
   








}