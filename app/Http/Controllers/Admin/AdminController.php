<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AdminController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function show(Request $request)
    {
        //30 урок
        $user = Auth::user();
//        $user = $request->user();
        if(!Auth::check()){
            $user = User::find(9);
//            Auth::guard('web')->login($user);

//            Auth::guard('web')->logout();
//            Auth::loginUsingId(9);


//            dump($user);
//            return redirect('/login');
        }
        if(Auth::viaRemember()){
            echo 'Yes';
        }
//        dump($user);
        dump(Auth::id());
        //28 урок
        return view('home');
//        return view('welcome');
    }
}
