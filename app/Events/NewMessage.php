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

class NewMessage implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   public $data;



    public function __construct($data)
    {

                $this->data = $data;

    }

    public function broadcastOn()
    {
        return ['chat-channel'];
    }

    public function broadcastAs()
    {
        return 'new-message';
    }


      public function broadcastWith()
    {
        return $this->data; // Returns the structured event payload
    }
}