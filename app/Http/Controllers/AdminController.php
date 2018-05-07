<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Stomadmin\User;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showAdminPanel(){
        if(Gate::allows('view-admin-panel')){
            return view('admin.controlpanel');
        }
        else{
            return back();
        }
    }
}
