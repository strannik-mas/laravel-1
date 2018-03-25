<?php

namespace App\Http\Controllers\Dir;
use App\Http\Controllers\Controller;
/**
 * Description of FirstController
 *
 * @author Alex
 */
class FirstController extends Controller{
    public function show(){
        echo 'inside '. __METHOD__;
    }
}
