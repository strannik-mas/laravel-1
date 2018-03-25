<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Events\onAddArticleEvent;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

use Gate;
use Event;

class AdminPostController extends Controller
{
    //show Form
    public function show() {
		return view('default.add_post',['title' => 'Новый материал']);
	}
	
	//new post
    public function create(Request $request) {
    	
    	/*if(Gate::denies('add-article')) {
			return redirect()->back()->with(['message'=>'У Вас нет прав']);
		}*/

    	//32 урок
        $article = new Article;
        /*if(Gate::denies('add', $article)) {
            return redirect()->back()->with(['message'=>'У Вас нет прав']);
        }*/
    	
    	if($request->user()->cannot('add', $article)){
            return redirect()->back()->with(['message'=>'У Вас нет вообще прав!!!']);
        }

    	$this->validate($request,[
    		'name'=>'required'
    	]);
    	
    	$user = Auth::user();
    	$data = $request->all();
    	
    	$res = $user->articles()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text']
        ]);

    	//34 урок
//        Event::fire(new onAddArticleEvent($res, $user));
//        event(new onAddArticleEvent($res, $user));
        Event::fire('onAddArticleEvent', [$res, $user]);
		return redirect()->back()->with('message','Материал добавлен');
       
	}
}
