<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class ConsultPaper extends Model
{
    protected $privateKey = 'paper_id';

    protected $fillable = [
        'paper_id', 'doctor_id', 'pacient_id', 'medicine', 'date'
    ];
}
