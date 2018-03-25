<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class IndexController extends Controller {

    public function show() {
        $array = array(
            'title' => 'Laravel Project',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5'
            ],
            'dataI' => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar' => true,
            'script' => "<script>alert('hello')</script>"
        );

//        $data = ['title'=>'Home','title2'=>'Hello2','title3'=>'Hello3'];
//        return view('default.template', $data);
//        return view('default.template')->with('title', 'Home Page');
//        $view = view('default.template');
//        $view->with('title', 'Home Page');
//        $view->with('title2', 'Home Page2');
//        $view->with('title3', 'Home Page3');        
//        return $view;
        if (view()->exists('default.index')) {
            /*
             * не работает
              view()->name('default.template', 'myview');
              return view()->of('myview', ['title'=>'Home']);
             * 
             */

            /*
              $path = config('view.paths');
              return view()->file($path[0].'/default/template.php')->withTitle('Hello!!!');
              //            return view('default.template')->withTitle('Hellu');
             * 

              $view = view('default.template', ['title'=>'Home'])->render();
              echo view('default.template', ['title'=>'Home'])->getPath() . '<br>';
              return $view; */
            return view('default.index', $array);
        }

        abort(404);
//        return view('default.welcome');
    }

}
