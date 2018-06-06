<?php

namespace Stomadmin;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $privateKey = 'invoice_id';

    protected $fillable = [
        'invoice_id', 'doctor_id', 'pacient_id', 'consultpaper_id'
    ];
}
