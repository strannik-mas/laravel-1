<?php

namespace App\Http\Controllers\Admin;

//use App\Helpers\Contracts\SaveStr;
use SaveStr;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Validator;
use Session;
use Lang;
use Auth;
use App;

class ContactController extends Controller
{
//    protected $request;
//    public function __construct(Request $request) {
//        $this->request = $request;
//    }
    public function show(Request $request/*, $id=false*/){
        /** 
         
        echo '<br><br><h2>Request</h2>';
        echo "<h1 style='margin-top:100px'>$id</h1>";
        print_r($request->all());
        print_r($request->only('name', 'site'));
        print_r($request->except(['name', 'site']));
        if($request->has('name')){
            echo "<h1 style='margin-top:100px'>".$request->input('name', 'Default')."</h1>";
        } 
         
        echo "<h1 style='margin-top:100px'>".$request->name."</h1>";
        
        
        if($request->is('contact/*')){
            echo "<h1 style='margin-top:100px'>".$request->path()."</h1>";
        }
        echo "<h1 style='margin-top:100px'>".$request->url()."</h1>";
        echo "<h1 style='margin-top:100px'>".$request->fullUrl()."</h1>";
        echo "<h1 style='margin-top:100px'>".$request->root()."</h1>";
        echo "<h1 style='margin-top:100px'>".$request->query('name')."</h1>";
        print_r($request->header());
        print_r($request->server());
        print_r($request->segments());
        print_r($request->segments());
        if($request->isMethod('post')){
//            проверка данных
            
            //сохранение данных формы в сессии
            $request->flash();  //все данные
            $request->flush();  //очистка сессии
            echo "<h1 style='margin-top:100px'>".$request->old('name')."</h1>";
            
            $request->flashOnly('name', 'site');
            $request->flashExcept('name', 'site');
//            редирект на форму с сохранением предыдущих значений
            return redirect()->route('contact')->withInput();   //тоже сохранение в сессию (не работает!!??)
            echo "<h1 style='margin-top:100px'>".$request->method()."</h1>";
        }
         * 
         */
        
        //25 урок
        /*
        if($request->isMethod('post')){            
            $rules = [
                'name' => 'unique:users,name',
//                'name' => 'required_with:email',
//                'name' => 'required_if:email,ii@ii.ii',
//                'name' => 'in:1,2,6',
//                'name' => 'exists:users,name',
//                'name' => 'digits:2',
//                'name' => 'different:email',
//                'name' => 'confirmed',
//                'name' => 'between:2,5',
//                'name' => 'alpha',
//                'name' => 'after:tomorrow',
//                'name' => 'required|max:10',
//                'email' => 'required|email'
            ];
            $this->validate($request, $rules);
            dump($request->all());
        }
         * 
         */
        
        //26 урок
        /*if($request->isMethod('post')){
            
            $messages = [];
            $validator = Validator::make($request->all(), [
                'name'  => 'required'
            ], $messages);
            if($validator->fails()){
                return redirect()->route('contact')->withErrors($validator)->withInput();
            }
             
        }
        */
        //33 урок
//        $res = $request->session()->get('key', 'default');
        $request->session()->put('key.first', 'znach');

//        if($request->session()->has('key.first1')){
//            $res = $request->session()->all();
//            dump($res);
//        }
//        $request->session()->push('key.second', 'val2');
//        Session::push('key.second', 'val2');
//        session(['key2'=>'val5']);
//        dump(session('key3', 'def3'));
//        Session::forget('key2');
//        Session::flush();
//        dump(Session::pull('key'));
//        Session::flash('mess', 'value');
//        Session::reflash('mess', 'value');
        //конец 33 урока

        //35 урок
//        $title_head = Lang::get('messages.hello', ['name' => 'vasya']);
//        $title_head = Lang::choice('messages.apple', 25);
        if(Lang::has('messages.apples')){
            $title_head = Lang::choice('messages.apples', 0);
        }

        //39 урок
//        dd(Lang::$app);

        return view('default.contact', ['title'=>'Contacts', 'title_head' => $title_head]);
    }
    /*public function store(ContactRequest $request, $id=false) {
        return view('default.contact',['title'=>'Contacts']);
    }*/
    //27 урок
    /**
     * @param Request $request
     * @param bool $id
     */
    public function store(Request $request,/* SaveStr $saveStr,*/ $id=false){
        /*
        if($request->isMethod('post')){
            //33 урок
            $request->session()->get('key', 'default');

            //конец 33 урока

            $messages = [
                'name.required'  => 'поле :attribute обязательно',
                'email.max'   => 'Максимально допустимое количество символов3 в поле :attribute - :max',
            ];
            $validator = Validator::make($request->all(), [
                'name'  => 'required',
//                'email'  => 'sometimes|required'
//                'email'  => 'required'
            ], $messages);

            $validator->sometimes(['email', 'site'], 'required', function ($input){
//                dd($input);
                return strlen($input->name) >=10 ;
            });
            $validator->after(function ($validator){
                $validator->errors()->add('name', 'dop soobshenie');
            });

            if($validator->fails()){
//                $messages = $validator->errors();

//                dump($messages->all());
//                dump($messages->first('name'));
//                dump($messages->get('email'));
                if($messages->has('name')){
//                    dump($messages->get('email'));
//                    dump($messages->all('<p> :message </p>'));
                    dump($messages->first('email','<p> :message </p>'));
                }
//                dump($messages->get('email'));
                return redirect()->route('contact')->withErrors($validator)->withInput();
            }

        }
//        $this->validate($request,$rules, $messages);
        return view('default.contact', ['title'=>'Contacts']);
        */
        //38 урок
//        $saveStr = App::make('SaveStr');

        //37 урок
//        $saveStr->save($request, Auth::user());

        //39 урок
        SaveStr::save($request, Auth::user());


        return redirect()->route('contact');
    }
}
