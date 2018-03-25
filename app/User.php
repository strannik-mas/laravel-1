<?php

namespace App;

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
        'name', 'email', 'password', 'login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //1 курс, 22 урок
    public function country() {
        return $this->hasOne('App\Country', 'user_id', 'id');
    }
    
    public function articles() {
        return $this->hasMany('App\Article');
    }
    
    public function roles() {
        return $this->belongsToMany('App\Role');
    }
}
