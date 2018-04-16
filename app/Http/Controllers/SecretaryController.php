<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('secretary.controlpanel');
    }
}