<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event');
    }

    /**
     * Run event and listener
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function run()
    {
        event(
            new TaskEvent(
                'olegmarko7@gmail.com',
                'Hello, How are you?'
            )
        );

        session()->flash(
            'event',
            'Success bind this event'
        );

        return back();
    }
}
