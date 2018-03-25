<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        echo __METHOD__;
        echo '<br>';
        echo route('showpage');
    }
    
    public function getCreate(){
        echo __METHOD__;
    }
    
    public function postIndex(){
        print_r($_POST);
    }
}
