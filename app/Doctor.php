<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $rolename = 'Doctor';

    public function doctorable(){
        return $this->morphTo();
    }
}
