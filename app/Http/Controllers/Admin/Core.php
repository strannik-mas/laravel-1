<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\User;
use App\Country;
use App\Role;

class Core extends Controller
{
    protected static $articles;
    public function __construct() {
//        $this->middleware('mymiddle');
    }
    public static function addArticles($array){
        return self::$articles[] = $array;
    }

    //list materials
    public function getArticles(){
        //конструктор запросов
        /*
        $articles = DB::table('articles')->get();  
        $articles = DB::table('articles')->first();     //only first record
        $articles = DB::table('articles')->value('name');
         
        DB::table('articles')->orderBy('id')->chunk(2, function($articles){
            foreach ($articles as $article) {
                Core::addArticles($article);
            }
        });
        $articles = DB::table('articles')->pluck('name');
        $articles = DB::table('articles')->count();
        $articles = DB::table('articles')->max('id');
//        $articles = DB::table('articles')->select('name', 'id', 'text')->get();
        $articles = DB::table('articles')->distinct()->select('name')->get();
        $query = DB::table('articles')->select('name');
        $articles = $query->addSelect('text AS fulltext')->get();
        $articles = DB::table('articles')->select('name','text')
            ->where('id', '<', 7)
            ->where('name', 'like', 'test%', 'or')
            ->orWhere('text', 'like', 'trulala%')
            ->get();
        $articles = DB::table('articles')->select('name','text')
            ->where([ 
                    ['id', '>', 7], 
                    ['name', 'like', 'test%', 'or']
                ])
            ->get();
        $articles = DB::table('articles')->select('name','text')->whereBetween('id',[7, 10])->get();
        $articles = DB::table('articles')->select('name','text')->whereNotBetween('id',[7, 10])->get();
        $articles = DB::table('articles')->select('name','text')->whereIn('id',[7, 8, 10])->get();
        $articles = DB::table('articles')->select('name','text')->whereNotIn('id',[7, 8, 10])->get();
        $articles = DB::table('articles')->select('name','text')->groupBy('name')->get();
        $articles = DB::table('articles')->select('name','text')->take(4)->skip(2)->get();
        DB::table('articles')->insert([
            ['name'=>'Test2', 'text'=>'hello2'],
            ['name'=>'Test3', 'text'=>'hello3']
        ]);
        //идентификатор последней добавленной записи
        $id = DB::table('articles')->insertGetId(
            ['name'=>'Test3', 'text'=>'hellu']
        );
        
        //where id=22
        $res = $articles = DB::table('articles')->where('id',21)->update([
            'name'=>'abracadabra1'
        ]);
        $res = $articles = DB::table('articles')->where('id',21)->delete();
        $articles = DB::table('articles')->get();
        dump($res);
        //1 курс, 20-й урок 
        $articles = Article::all();
        $articles = Article::where('id', '>', 10)->orderBy('name')->take(2)->get();
        Article::chunk(2, function($articles){
        });
        foreach($articles as $article){
            echo $article->name.'<br>';
        }
        $article = Article::find(11);
        $article = Article::find([7,8,9]);
        $article = Article::where('id', 8)->first();
        $article = Article::findOrFail(1);
        $article = Article::where('id', 2)->firstOrFail();
        
        //сохранение в таблицу
        $article = new Article;
        $article->name = 'new article';
        $article->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, natus.';
//        $article->save();
        $article = Article::find(23);
        $article->name = 'new name2';
        $article->save();
         * 
         */
        //1 курс, 21 урок
        //ошибка из-за того, что надо указать список полей, в которые разрешается добавление информации
        /*
        Article::create([
            'name' => 'name21',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit autem atque perspiciatis sequi debitis consectetur ipsam sint laborum assumenda.'
        ]);
        $article = Article::firstOrCreate([
            'name' => 'name212',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit autem atque perspiciatis sequi debitis consectetur ipsam sint laborum assumenda.'
        ]);
        $article = Article::firstOrNew([
            'name' => 'name213',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit autem atque perspiciatis sequi debitis consectetur ipsam sint laborum assumenda.'
        ]);
        $article->save();
        //удаление моделей
        $article = Article::find(27);
        $article->delete();
        Article::destroy([25,26]);
        Article::where('id', '>', '8')->delete();
        $article = Article::find(24);
        $article->delete();
        
        
        $articles = Article::withTrashed()->get();
        $articles = Article::withTrashed()->restore();
        $articles = Article::onlyTrashed()->restore();
        
        foreach ($articles as $article){
            if($article->trashed()){
                echo $article->name.' удалена!<br>';
                $article->restore();
            }else {
                echo $article->name.' не уд!<br>';
            }
        }
        
        $article = Article::find(24);
        $article->forceDelete();
         * 
         */
        //1 курс, 22 урок
        /*
        $user = User::find(1);
        dump($user->country);
        $articles = $user->articles;
        $articles = $user->articles()->where('id','>', 10)->get();
        $article= Article::find(8);
        foreach ($articles as $article) {
            echo $article->name.'<br>';
        }
        dump($user->articles);
        $country = Country::find(1);
        $country = $user->country;
        dump($country->user);        
        $user = User::find(1);
        $role = $user->roles()->where('roles.id', 2)->first();
        $role = Role::find(1);
        foreach ($user->roles as $role) {
            echo $role->name.'<br>';
        }
        dump($role->users);
        dump($user->roles);
        $articles = Article::all();
        dump($article->user->name);
        dump($articles);
        dump(self::$articles);
         * 
         */
        //23 урок
        /*
        $articles = Article::all();
        foreach ($articles as $article) {
            echo $article->user->name.'<br>';       //на каждой итерации идет обращение к БД (ленивая загрузка)
            
        }
//        жадная загрузка
        $articles = Article::with('user')->get();
        $articles = Article::all();
//        ....
        $articles->load('user');
        foreach ($articles as $article) {
            echo $article->user->name.'<br>';       
        }
        $users = User::all();
        $users = User::with('articles', 'roles')->get();        
        $users = User::has('articles', '>=', 3)->get();
        foreach ($users as $user) {
            dump($user->roles);
            dump($user->articles);
            dump($user);
        }
        $user = User::find(1);
        $article = new Article([
            'name' => 'new article23-4',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, quisquam, accusamus, quos, cumque rem ipsa architecto ullam assumenda reprehenderit commodi obcaecati quo quidem porro labore natus incidunt minima? Natus, amet, a, optio, soluta harum pariatur possimus molestiae assumenda dicta eius recusandae culpa consectetur facilis temporibus illo sunt ratione beatae eum ex commodi aspernatur voluptatibus mollitia ut magnam deserunt odit aliquid praesentium? Laborum, iste, molestias impedit sint iusto minus aliquam culpa reprehenderit similique atque dolores autem rerum obcaecati. Maiores, rem, qui, atque tempora eos repudiandae consectetur possimus ullam sit culpa earum distinctio sint magnam commodi fugit quibusdam quod ratione quisquam dolore.'
        ]);
        $user->articles()->save($article);
        $user->articles()->create([
            'name' => 'new article23-2',
            'text' => 'Lorem ipsum dolor sit amet.'
        ]);
        $user->articles()->saveMany([$article,
                new Article([
                    'name' => 'new article23-3',
                    'text' => 'Lorem ipsum dolor sit amet.'
                ])
            
            ]);
        $role = new Role([
            'name' => 'guest'
        ]);
        $user->roles()->save($role);
        $user->articles()->where('id',24)->update([
            'name' => 'new text'
        ]);
        $articles = Article::find(24);
        dump($articles);
         * 
         */
        //24 урок
        /*
        //один к одному
        $country = Country::find(1);
        $user = User::find(2);
        
        $country->user()->associate($user);
        $country->save();
        //один ко многим
        $articles = Article::all();
        $user = User::find(2);
        foreach($articles as $article){
            $article->user()->associate($user);
            $article->save();
        }
        //многие ко многим
        $user = User::find(2);
        $role_id = Role::find(2)->id;
//        $user->roles()->attach($role_id);
        $user->roles()->detach($role_id);
         * 
         */
        
        $article = Article::find(24);
//        $article->name = 'My text';
//        echo $article->name;
//        dump($article);
//        $article->text = ['key' => 1, 'key2' => 2];
//        $article->save();
        dump($article->toArray());  //только то, что в attributes
        dump($article->toJson());
        //тоже самое
        dump((string)$article);
    }
    
    // material
    public function getArticle($id){
        echo "Ответ - $id";
    }
}
