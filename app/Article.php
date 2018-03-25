<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //можно через это свойство указать имя любой таблицы
//    protected $table = 'articles';
    protected $primatyKey = 'id';
    public $incrementing = true;
//    public $timestamps = false;
    
    //поля доступные для записи
    protected $fillable = ['name', 'text', 'img'];
    
    //поля недоступные для записи
//    protected $guarded = ['*'];
    
    protected $dates = ['deleted_at'];
    
    //для 24 урока - свойство, в котором будет определен тип данных для каждого поля модели
    /*
    protected $casts = [
        'name' => 'boolean',
        'text' => 'array'
    ];
*/



    //22 урок
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    //24 урок
    //метод читатель
    /*
    public function getNameAttribute($param) {
        return 'hi - '.$param.'- bye!';
    }
    
    //метод преобразователь
    public function setNameAttribute($param) {
        $this->attributes['name'] = $param.' was changed';
    }
     * 
     */
}
