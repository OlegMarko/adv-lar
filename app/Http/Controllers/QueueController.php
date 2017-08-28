<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('queue');
    }

    public function run()
    {
        (new MailController())->sendMail();

        session()->flash(
            'queue',
            'Success run this queue'
        );

        return back();
    }
}
