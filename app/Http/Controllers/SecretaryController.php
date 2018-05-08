<?php

namespace Stomadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SecretaryController extends Controller
{
    public function showSecretaryPanel(){
        if(Gate::allows('view-secretary-panel')){
            return view('secretary.controlpanel');
        }
        else{
            return back();
        }
    }
}
