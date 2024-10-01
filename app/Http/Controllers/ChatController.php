<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Pusher\Pusher;
use App\Events\NewMessage;
use App\Events\GuessMessage;
use App\Models\User;
use App\Models\Chat;
use App\Models\Message;





use Illuminate\Support\Facades\Storage;


class ChatController extends Controller
{
    

// public function sendMessage(Request $request)
// {
//     $message = $request->input('message');
//     $username = $request->input('username', 'Guest');



//     $messageContent = [
//         'message' => $message,
//         'username' => $username,
//     ];
//         $eventPayload = [
//         'message' => $messageContent, // This will nest messageText and username
//         'username' => $username,      // This is optional, just showing redundancy
//     ];



//     event(new NewMessage($eventPayload));

//     return response()->json(['status' => 'Message Sent!']);
// }



    //  public function sendMessage(Request $request)
    // {
    //     $user = Auth::user();
    //     $message = $request->input('message');

    //       $chat = Chat::create([
    //         'user_id' => $user->id,
    //         'message' => $message,
    //         'is_from_admin' => false
    //     ]);

    //     // Broadcast the message event
    //     broadcast(new GuessMessage($user, $message))->toOthers();

    //     return response()->json(['status' => 'Message sent']);
    // }


    //  public function adminSendMessage(Request $request, $userId)
    // {
    //     $admin = Auth::user(); // Ensure the admin is authenticated
    //     $message = $request->input('message');

    //         $chat = Chat::create([
    //         'user_id' => $userId,
    //         'admin_id' => $admin->id,
    //         'message' => $message,
    //         'is_from_admin' => true
    //     ]);

    //            broadcast(new GuessMessage($admin, $message))->toOthers();
            
    // return response(['status' => 'Message Sent to User!']);



    // }

    //    public function getChatHistory($userId)
    // {
    //     $chats = Chat::where('user_id', $userId)->get();
    //     return response()->json($chats);
    // }



//   public function sendMessage(Request $request)
//     {
//         $senderId = Auth::id();
//         $receiverId = $request->receiver_id; // Pass the receiver ID (admin or other users)

//         // Store message in database
//         $message = Message::create([
//             'user_id' => $senderId,
//             'receiver_id' => $receiverId,
//             'message' => $request->message,
//         ]);

//         // Broadcast the message via the updated GuessMessage event
//         broadcast(new GuessMessage($message->message, $senderId, $receiverId))->toOthers();

//         return response()->json(['status' => 'Message Sent!']);
//     }

//     public function getMessages($receiverId)
//     {
//         // Fetch all messages between the current user and the receiver (admin or other user)
//         $messages = Message::where(function ($query) use ($receiverId) {
//             $query->where('user_id', Auth::id())
//                   ->where('receiver_id', $receiverId);
//         })->orWhere(function ($query) use ($receiverId) {
//             $query->where('user_id', $receiverId)
//                   ->where('receiver_id', Auth::id());
//         })->get();

//         return response()->json($messages);
//     }

//     public function getUsersWithMessages()
//     {
//         // Admin gets the list of unique users who have messaged
//         $users = Message::select('user_id')->distinct()->get();

//         return response()->json($users);
//     }

















    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        $senderId = auth()->id(); // The logged-in user (sender)
        $receiverId = $request->input('receiver_id'); // Admin's ID for now

        // Store the message in the database
        Message::create([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'message' => $message,
        ]);

        // Broadcast the message to the Pusher channel
        event(new GuessMessage($message, $senderId, $receiverId));

        return response()->json(['status' => 'Message sent']);
    }






   




}