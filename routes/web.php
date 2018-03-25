<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', ['as' => 'home', 'middleware' => 'mymiddle',function () {
    return view('welcome');
}]);
 * 
 */
//Route::get('/', ['as' => 'home', 'middleware' => 'auth', 'uses' => 'Admin\IndexController@show']);
Route::get('/', ['as' => 'home', 'uses' => 'Admin\IndexController@show']);

Route::get('/about/{id}', 'FirstController@show');
Route::get('/articles',['uses' => 'Admin\Core@getArticles', 'as' =>'articles']);
//через : можно передать параметр в класс посредника
//Route::get('/article/{page}',['middleware' => 'mymiddle:admin', 'uses' => 'Admin\Core@getArticle', 'as' =>'article'])/*->middleware(['mymiddle'])*///;
Route::get('/article/{id}',['middleware' => 'mymiddle:admin', 'uses' => 'Admin\Core@getArticle', 'as' =>'article'])/*->middleware(['mymiddle'])*/;
//Route::get('/article/{page}',['uses' => 'Admin\Core@getArticle', 'as' =>'article','middleware' => 'mymiddle']);
//Route::get('/pages', 'FirstController@getPages');
//Route::get('/about', 'Dir\FirstController@show')->name('about');
Route::get('/about', 'Admin\AboutController@show')->name('about');
//Route::match(['get', 'post'],'/contact/{name?}', ['uses' => 'Admin\ContactController@show', 'as' =>'contact']);
//26 урок
Route::get('/contact', ['middleware' => /*'auth'*/ 'web','uses' => 'Admin\ContactController@show', 'as' =>'contact']);
Route::post('/contact', ['middleware' => 'web', 'uses' => 'Admin\ContactController@store']);
    /**
     * Show list pages.
     *
     * @param  string   Template of request
     * @param string    Name of the resource-controller
     * 
     */
//формирование дополнительного маршрута для resource controller
//Route::get('pages/add', 'Admin\CoreResource@add');
//Route::resource('/pages', 'Admin\CoreResource', ['except'=>['index','show']]);    //pages.index or pages.store etc
//Route::resource('/pages', 'Admin\CoreResource', ['only'=>['index','show']]);    //pages.index or pages.store etc

//Route::controller('/pages', 'PagesController');     //Не работает - метод Route::controller был deprecated и сейчас его убрали совсем
Route::get('/pages', 'PagesController@getIndex')->name('showpage');
Route::post('/pages', 'PagesController@postIndex')->name('postpage');
Route::get('/pages/create', 'PagesController@getCreate')->name('createpage');

/*
//тестовые маршруты
Route::get('/article/{id}', ['as' => 'article',function ($id) {
    echo $id;
}]);
//Route::get('/page/{id?}', function ($v1=50) {
Route::get('/page/{cat}/{id}', function ($v1,$v2) {
    //параметры попадают по порядку в шаблоне
    
    echo '<pre>';
    echo "cat- $v1<br>id= $v2";
//    echo config('app.locale');
//    echo Config::set('app.locale', 'ru');
//    echo Config::get('app.locale');
//    echo env('APP_ENV');
    print_r($_ENV);
    echo '</pre>';
    return view('page');
})*//*->where(['id' => '\d+', 'cat'=>'[A-Za-z]+']);*/
/*
Route::post('/comments', function(){
    
//     * не работает - it's work in VerifyCsrfToken add route
//     * 419 unknown status
//     * Failed to load resource: the server responded with a status of 419 (unknown status)
//     * The page has expired due to inactivity. 
     
    print_r($_POST);
});

Route::match(['get', 'post'],'/comments', function(){
    print_r($_POST);
});
//Route::any('/comments', function(){
//    print_r($_POST);
//});

Route::group(['prefix' => 'admin/{id}'], function(){
    Route::get('page/create/{id2}', function($id){
        $route = Route::current();
        echo $route->getName().'<br>';
        echo $route->parameter('id2', 24).'<br>';
        print_r($route->parameters()) ;
        
//        return redirect()->route('article', ['id' => 23]);
//        return redirect()->route('home');
//        echo "page/create";
    })->name('createpage');
    Route::get('page/edit', function(){
        echo "page/edit";
    });
});*/
//28 урок
Auth::routes();
Route::group(['middleware' => 'web'], function (){
    Route::get('/login', ['uses'=>'Auth\MyAuthController@showLogin', 'as' => 'login']);
    Route::post('/login', ['uses'=>'Auth\MyAuthController@authenticate']);

    Route::get('/home', 'HomeController@index')->name('home');
});


//29 урок
// admin/add/post
Route::group(['prefix' => 'admin', 'middleware' => ['web'/*, 'auth.basic'*/,'auth']], function (){
    // admin/
    Route::get('/', ['uses'=>'Admin\AdminController@show', 'as' => 'admin_index']);
    Route::get('/add/post', ['uses'=>'Admin\AdminPostController@show', 'as' => 'admin_add_post']);
    Route::post('/add/post',['uses'=>'Admin\AdminPostController@create','as'=>'admin_add_post_p']);

    Route::get('/update/post/{id}',['uses'=>'Admin\AdminUpdatePostController@show','as'=>'admin_add_post']);
    Route::post('/update/post',['uses'=>'Admin\AdminUpdatePostController@create','as'=>'admin_update_post_p']);
});
