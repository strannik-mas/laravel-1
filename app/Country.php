<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //1 курс, 22 урок
    public function user() {
        return $this->belongsTo('App\User');
    }
}
