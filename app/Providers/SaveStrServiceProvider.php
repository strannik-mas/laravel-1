<?php

namespace App\Providers;

use App\Helpers\SaveEloquentOrm;
use App\Helpers\SaveFile;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //37 урок
        /*$this->app->bind('App\Helpers\Contracts\SaveStr', function (){
//            return new SaveEloquentOrm();
            return new SaveFile();
        });*/

        //38 урок
        /*$this->app->singleton('SaveStr', function (){
//            return new SaveEloquentOrm();
            return new SaveFile();
        });*/

//        $obj = new SaveFile;
//        $this->app->instance('App\Helpers\Contracts\SaveStr', $obj);
//        dd($this->app['App\Helpers\Contracts\SaveStr']);
//        dd($this->app->make('App\Helpers\Contracts\SaveStr'));
//        $this->app->bind('App\Helpers\Contracts\SaveStr', 'App\Helpers\SaveFile');

        //39 урок
        $this->app->bind('savestr', function (){
            
//            return new SaveEloquentOrm();
            return new SaveFile();
        });
    }
}
