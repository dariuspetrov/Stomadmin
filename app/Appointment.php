<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'appointment_id';

    public function pacient(){
        return $this->belongsTo('Stomadmin\User','pacient_id');
    }

    public function doctor(){
        return $this->belongsTo('Stomadmin\User','doctor_id');
    }
}
