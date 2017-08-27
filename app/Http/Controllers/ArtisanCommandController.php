<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanCommandController extends Controller
{
    /**
     * Show the form view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('command');
    }

    public function runCommand($command, $params = null, $options = [])
    {
        $return = Artisan::call($command . ' ' . $params, $options);

        session()->flash(
            'validation',
            'Success run artisan command: ' . $command . '<br>' .
            'Command return response: ' . $return
        );

        return back();
    }
}
