<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReCaptchaRequest;

class ReCaptchaController extends Controller
{
    /**
     * Show the form re-captcha view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('re-captcha');
    }

    /**
     * Validation the form re-captcha request.
     *
     * @return string
     */
    public function submit(ReCaptchaRequest $request)
    {
        session()->flash('validation', 'Form reCAPTCHA validation success');

        return back();
    }
}
