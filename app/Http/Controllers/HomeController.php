<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin()){
            return view('admin.controlpanel');
        }

        if(Auth::user()->isSecretary()){
            return view('secretary.controlpanel');
        }

        if(Auth::user()->isDoctor()){
            return view('doctor.controlpanel');
        }

        if(Auth::user()->isUser()){
            return view('user.controlpanel');
        }
        // return view('home');
    }
}
