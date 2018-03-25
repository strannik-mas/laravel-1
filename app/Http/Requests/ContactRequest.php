<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'email'     => 'max:5|required',
        ];
    }
    
    public function messages() {
        return [
            'name.required'  => 'Какая-то хрень2 . поле :attribute обязательно',
            'email.max'   => 'Максимально допустимое количество символов в поле :attribute - :max',
        ];
    }
}
