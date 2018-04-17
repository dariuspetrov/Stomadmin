<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $rolename = 'Admin';

    public function adminable(){
        return $this->morphTo();
    }

    public function viewUsers(){
        $user = new User;
        echo $user::all();
    }
}
