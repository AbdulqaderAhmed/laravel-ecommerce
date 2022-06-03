<?php

namespace App\Listeners;

use App\Events\UserEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
        $user = $event->user;

        echo $user->name . 'with ' . $user->email . ' email and ID ' . $user->id;
    }
}
