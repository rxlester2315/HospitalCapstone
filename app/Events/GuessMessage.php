<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GuessMessage implements ShouldBroadcastNow
{
    public $message;
    public $senderId;
    public $receiverId;

    public function __construct($message, $senderId, $receiverId)
    {
        $this->message = $message;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
    }

    public function broadcastOn()
    {
        // Broadcast to both the sender's and receiver's private channels
        return [
            new PrivateChannel('private-chat-' . $this->senderId),
            new PrivateChannel('private-chat-' . $this->receiverId),
            new PrivateChannel('private-chat-21') // Ensure admin can access all chats
        ];
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'sender_id' => $this->senderId,
        ];
    }

    public function broadcastAs()
    {
        return 'chat-message';
    }
}