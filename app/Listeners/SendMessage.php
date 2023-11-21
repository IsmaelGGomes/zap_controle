<?php

namespace App\Listeners;

use App\Events\RefreshDashboard;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMessage
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
    public function handle(RefreshDashboard $event)
    {

        //return view('dashboard', ['result' => $event->result]);

        // $request = app(Request::class);

        // $redirect = url($event->result);

        // if ($request->ajax()) {
        //     return response()->json(['redirect' => $redirect]);
        // } else {
        //     return redirect($redirect);
        // }
    }
}
