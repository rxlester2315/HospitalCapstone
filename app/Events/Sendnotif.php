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

class Sendnotif implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    use Dispatchable, InteractsWithSockets, SerializesModels;

  public $appointments;

  public function __construct($appointments)
  {
      $this->appointments = $appointments;
  }

  public function broadcastOn()
  {
      return ['messages'];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }

   
}