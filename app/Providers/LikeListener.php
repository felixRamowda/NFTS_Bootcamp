<?php

namespace App\Providers;

use App\Events\LikeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Pusher\Pusher;

class LikeListener
{
    /**
     * Create the event listener.
     */


    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LikeEvent $event)
    {
        return $event->message;
    }
}