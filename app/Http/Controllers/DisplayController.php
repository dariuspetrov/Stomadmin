<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{
    private $adminRoleNr = 3;
    private $doctorRoleNr = 2;
    private $secretaryRoleNr = 1;
    private $userRoleNr = 0;

    public function showAdminPanel()
    {
        if(Auth::user()->role == $this->adminRoleNr){
            return view('admin.controlpanel');
        }
        else{
            return back();
        }
    }

    public function showSecretaryPanel()
    {
        if(Auth::user()->role == $this->secretaryRoleNr){
            return view('secretary.controlpanel');
        }
        else{
            return back();
        }
    }

    public function showDoctorPanel()
    {
        if(Auth::user()->role == $this->doctorRoleNr){
            return view('doctor.controlpanel');
        }
        else{
            return back();
        }
    }
}