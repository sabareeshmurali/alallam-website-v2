<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Messanger implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

public $message;
public $user;
public $time;

  public function __construct($data)
  {
    $this->user = $data['user'];
    $this->message=$data['message'];
    $this->time = $data['time'];
  }

  public function broadcastOn()
  {
      return ['my-channel'];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
}
