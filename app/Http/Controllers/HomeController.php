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
        switch(Auth::user()->getRoleName()){
        case 'Admin':
            return redirect('/admin');
            break;
        case 'Doctor':
            return redirect('/doctor');
            break;
        case 'Secretary':
            return redirect('/secretary');
            break;
        case 'User':
            return redirect('/user');
            break;
        }
    }
}
