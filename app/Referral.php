<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $primaryKey = 'referral_id';

    public function doctor(){
        return $this->belongsTo('Stomadmin\User');
    }

    public function pacient(){
        return $this->belongsTo('Stomadmin\User');
    }
    public function unit(){
        return $this->belongsTo('Stomadmin\MedicalUnit','unit_id');
    }

}
