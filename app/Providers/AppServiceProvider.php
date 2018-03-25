<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use DB;
use Response;
use App\Article;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        //создание собственной blade-директивы
        Blade::directive('myDir', function($var){
            return "<h1>New directive $var</h1>";
            
        });
         * 
         */
        //создание собственного макета ответа
        Response::macro('myResponse', function($value){
            return Response::make($value);
        });
        
        /*DB::listen(function($query){
            dump($query->sql);
            dump($query->bindings);
        });*/

        //34 урок
        Article::created(function(Article $article){
            Log::info('Article save in appServiceProvider: ', [$article->user->name => $article->name]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
