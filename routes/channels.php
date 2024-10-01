<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Auth;


Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('messages',function($user){

    return true;
});


Broadcast::channel('notifmess',function($user){

    return true;
});



Broadcast::channel('chat.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id; // Ensures only the correct user can listen
});

Broadcast::channel('chat.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId;
});










Broadcast::channel('private-chat-{receiverId}', function ($user, $receiverId) {
    // Allow the admin (with id = 21) to join any user's channel
    return (int) $user->id === (int) $receiverId || (int) $user->id === 21;
});






Broadcast::routes(['middleware' => ['auth']]);

