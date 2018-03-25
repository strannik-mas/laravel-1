<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.02.2018
 * Time: 0:31
 */

namespace App\Helpers;

use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;

class SaveEloquentOrm implements SaveStr
{
    public static function save(Request $request, User $user){
        $obj = new self;
        $data = $obj->checkData($request->only('name', 'text'));
        $user->articles()->create($data);
    }

    public function checkData($array){
        return $array;
    }
}