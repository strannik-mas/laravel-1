<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use DB;
class AboutController extends Controller
{
    public function show(){
        if(view()->exists('default.about')){
            /*
            $articles = DB::select("SELECT * FROM articles WHERE id = ?", [2]);
            $articles = DB::select("SELECT * FROM articles WHERE id = :id", ['id'=>3]);
            DB::insert("INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?, ?, ?)", ['test3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente.', 'test3.jpg']);
            
//            $result = DB::update("UPDATE `articles` SET `name` = ? WHERE `id`=?", ['test23', 5]);
//            $result = DB::delete('DELETE FROM articles WHERE id = :id', ['id'=>6]);
            DB::insert("INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?, ?, ?)", ['test5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente.', 'test5.jpg']);
            $result = DB::connection()->getPdo()->lastInsertId();
             * 
             */
             
//            DB::statement('DROP table `articles`');
            $page = DB::select("SELECT `pagetitle` as title, `longtitle`, `content`, `template`, `updated_at` as date FROM pages  WHERE template = :t", ['t'=>'default.about']);
            
//            dump($result);
//            dump((array)$page[0]);
            
//            $view = view('default.about')->withTitle('About Us')->render();
            return view('default.about', (array)$page[0]);
            /*return (new Response($view))
                ->header('Header-One', 'header 1')
                ->header('Header-Two', 'header 2');
            return response($view)
                ->header('Header-One', 'header 1')
                ->header('Header-Two', 'header 2');
//            return view('default.about')->withTitle('About Us');
             
            return response()->json(['name'=>'hello','name2'=>'hello2']);
            return response()->view('default.about', ['title'=>'About you']);
            return response()->download('robots.txt', 'mytext.txt', ['Header-One'=> 'header 1']);
            return response($view)->withHeaders([
                'header-one'=>'hhh111'
            ]);
            return redirect('/articles')->withInput();
            return redirect('/contact')->with('param1', 'Hello');   //тоже не работает включение в сессию
            return redirect()->route('/articles');
            return redirect()->action('Admin\ContactController@show');
            return new RedirectResponse('/articles');
            return RedirectResponse::create('/articles');
             * 
             */
//            return response()->myResponse('hell');
        }
        abort(404);
    }
}
