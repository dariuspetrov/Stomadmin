<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'appointment_id';

    public function user(){
        return $this->belongsTo("User");
    }
}
