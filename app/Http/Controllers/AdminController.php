<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewSingleUser($userid){
        $user = new \Stomadmin\User;
        echo $user::find($userid);
    }

    public function viewUsersData(){
        $user = new \Stomadmin\User;
        echo $user::all();
    }
}
