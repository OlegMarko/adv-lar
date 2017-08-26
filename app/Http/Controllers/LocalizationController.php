<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('locale')) {
            App::setLocale(session('locale'));
        }

        $data['lang'] = App::getLocale();

        return view('localization', $data);
    }

    /**
     * Set App localization
     *
     * @param string $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLocale($lang = null)
    {
        session(['locale' => $lang]);

        return back();
    }
}
