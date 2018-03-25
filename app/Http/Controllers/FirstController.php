<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
/**
 * Description of FirstController
 *
 * @author Alex
 */
class FirstController extends Controller{
    public function show($id){
        echo __METHOD__;
        echo '<br>'.$id;
    }
}
