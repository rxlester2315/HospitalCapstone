<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Pusher\Pusher;
use App\Events\NewMessage;
use Illuminate\Support\Facades\Storage;


class ChatController extends Controller
{
    

public function sendMessage(Request $request)
{
    $message = $request->input('message');
    $username = $request->input('username', 'Guest');



    $messageContent = [
        'message' => $message,
        'username' => $username,
    ];
        $eventPayload = [
        'message' => $messageContent, // This will nest messageText and username
        'username' => $username,      // This is optional, just showing redundancy
    ];



    event(new NewMessage($eventPayload));

    return response()->json(['status' => 'Message Sent!']);
}




}