<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AlgoliaController extends Controller
{
    /**
     * Show the form view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('algolia');
    }

    public function search()
    {
        $query = request('query');

        $results = User::search($query)->get();

        return $results;
    }
}
