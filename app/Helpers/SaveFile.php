<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.02.2018
 * Time: 0:41
 */

namespace App\Helpers;
use App\User;
use Illuminate\Http\Request;
use App\Helpers\Contracts\SaveStr;
use Storage;


class SaveFile implements SaveStr
{
    public static function save(Request $request, User $user){
        $obj = new self;
        $data = $obj->checkData($request->only('name', 'text'));
        $str = $data['name'].' | '.$data['text'];
        Storage::prepend('str.txt', $str);
    }

    public function checkData($array){
        return $array;
    }
}