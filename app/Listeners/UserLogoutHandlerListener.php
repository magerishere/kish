<?php

namespace App\Listeners;

use App\Events\UserHandlerEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserLogoutHandlerListener
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
     * @param  UserHandlerEvent  $event
     * @return void
     */
    public function handle(UserHandlerEvent $event)
    {
        //
    }
}
