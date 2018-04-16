<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    public $rolename = 'Secretary';

    public function secretaryable(){
        return $this->morphTo();
    }
}
