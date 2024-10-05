<?php

namespace App\Events;
use App\Models\Messagess; 

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $senderId;
    public $receiverId;

    public function __construct(Messagess $message, $senderId, $receiverId) 
    {
         $this->message = $message;
    $this->senderId = $senderId;  // Assign sender ID
    $this->receiverId = $receiverId;  // Assign receiver ID
    }

    public function broadcastOn()
    {
        return new Channel('chat.' . $this->message->chat_session_id);
    }

    //   public function broadcastWith()
    // {
    //     return [
    //         'message' => $this->message->message, // Access the actual message text
    //         'sender_id' => $this->senderId,
    //     ];
    // }

    public function broadcastAs()
    {
        return 'chat-message';
    }

    public function broadcastWith(){
    return [
        'message' => [
            'from_admin' => $this->message->from_admin,
            'message' => $this->message->message,
        ],
        'user_id' => $this->senderId,
        'adminId' => $this->receiverId,
        'message' => $this->message,

        // add any other properties you need
    ];
}
}