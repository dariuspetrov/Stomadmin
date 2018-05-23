<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $primaryKey = 'intervention_id';

    public function user(){
        return $this->belongsTo('Stomadmin\User','pacient_id');
    }

    public function type(){
        return $this->belongsTo('Stomadmin\InterventionType','intervention_type');
    }
}
