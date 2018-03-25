<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //22 урок
    protected $fillable = [
        'name'
    ];
    public function users() {
        return $this->belongsToMany('App\User', 'role_user', 'role_id', 'user_id');  //имя связующей таблицы, поля в связующей таблице
    }
}
