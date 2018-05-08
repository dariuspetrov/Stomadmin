<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DoctorController extends Controller
{
    public function showDoctorPanel(){
        if(Gate::allows('view-doctor-panel')){
            return view('doctor.controlpanel');
        }
        else{
            return back();
        }
    }
}
