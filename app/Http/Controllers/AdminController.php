<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function viewSingleUser($userid){
        if(Gate::allows('view-user')){
            $user = new \Stomadmin\User;
            echo $user::find($userid);
        }
        else
            echo 'Not allowed';
    }

    public function viewUsersData(){
        if(Gate::allows('view-users')){
            $user = new \Stomadmin\User;
            echo $user::all();
        }
        else
            echo 'Not allowed';
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
