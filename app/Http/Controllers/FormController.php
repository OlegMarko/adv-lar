<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FormValidationRequest;

class FormController extends Controller
{
    /**
     * Show the form view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Validation the form request.
     *
     * @return string
     */
    public function submit(FormValidationRequest $request)
    {
        session()->flash('validation', 'Form validation success');

        return back();
    }
}
