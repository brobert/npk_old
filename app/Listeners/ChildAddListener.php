<?php

namespace App\Listeners;

use App\Events\ChildAddEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Storage;

class ChildAddListener
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
     * @param  ChildAddEvent  $event
     * @return void
     */
    public function handle(ChildAddEvent $event)
    {
        $message = $event->request->user()->name . ' just logged in to the application. ['.Carbon::now().']';
        Storage::append('loginactivity.txt', $message);
    }
}
