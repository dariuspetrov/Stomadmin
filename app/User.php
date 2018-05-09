<?php

namespace Stomadmin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cnp', 'adress', 'birthdate','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRoleName(){
        switch($this->role){
            case 3:
                return 'Admin';
                break;
            case 2:
                return 'Doctor';
                break;
            case 1:
                return 'Secretary';
                break;
            case 0:
                return 'User';
                break;
        }
    }

    public function isAdmin(){
        if($this->role == 3)
            return true;
        else
            return false;
    }

    public function isDoctor(){
        if($this->role == 2)
            return true;
        else
            return false;
    }

    public function isSecretary(){
        if($this->role == 1)
            return true;
        else
            return false;
    }

    public function isUser(){
        if($this->role == 0)
            return true;
        else
            return false;
    }

    public function appointemntAsPacient(){
        return Appointment::where('pacient_id', $this->id);
    }

    public function appointmentAsDoctor(){
        return Appointment::where('doctor_id', $this->id);
    }
}
