<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 27.02.2018
 * Time: 0:15
 */

namespace App\Helpers\Facades;


use Illuminate\Support\Facades\Facade;

class SaveStr extends Facade
{
// 39 урок
    protected static function getFacadeAccessor()
    {
        return 'savestr';
    }
}