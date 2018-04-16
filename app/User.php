<?php

namespace Stomadmin;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* Polymorphic relationships */

    public function admin(){
        if($this->role == 3){
            return $this->morphMany(Admin::class, 'adminable');
        }
        else{
            echo 'User does not have admin privilleges!';
        }
    }

    public function doctor(){
        if($this->role == 2){
            return $this->morphMany(Doctor::class, 'doctorable');
        }
        else{
            echo 'User does not have doctor privilleges!';
        }
    }

    public function secretary(){
        if($this->role == 1){
            return $this->morphMany(Secretary::class, 'secretaryable');
        }
        else{
            echo 'User does not have secretary privilleges!';
        }
    }
}
