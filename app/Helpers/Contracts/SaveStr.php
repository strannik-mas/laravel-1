<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.02.2018
 * Time: 0:27
 */

namespace App\Helpers\Contracts;

use App\User;
use Illuminate\Http\Request;

interface SaveStr
{
    //36 урок

    public static function save(Request $request, User $user);

    public function checkData($array);
}