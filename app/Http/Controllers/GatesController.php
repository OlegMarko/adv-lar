<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class GatesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gates');
    }

    /**
     * Test this gates
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function test()
    {
        $gate = Gate::allows('subscribe-only', auth()->user());

        return view('test-gates', [
            'gate' => $gate
        ]);
    }

    /**
     * Set subscription
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function subscribe()
    {
        User::find(auth()->user()->id)->update([
            'subscription' => 1
        ]);

        session()->flash('gates', 'success');

        return redirect('/gates');
    }

    /**
     * Unset subscription
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function unSubscribe()
    {
        User::find(auth()->user()->id)->update([
            'subscription' => 0
        ]);

        session()->flash('gates', 'success');

        return redirect('/gates');
    }
}
