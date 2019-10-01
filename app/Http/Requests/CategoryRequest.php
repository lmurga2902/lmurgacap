<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|min:6|max:15',
            'description'=>'required|min:10|max:40'
        ];
    }

    public function attributes(){
        return [
            'name'=>'nombre',
            'description'=>'descripción'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Debes ingresar el nombre',
            'description.required'=>'Debes ingresar la descripción',
            'name.min'=>'Debes ingresar mínimo 6 caracteres',
            'description.min'=>'Debes ingresar mínimo 10 caracteres',
            'name.max'=>'Debes ingresar máximo 15 caracteres',
            'description.max'=>'Debes ingresar máximo 40 caracteres'
        ];
    }
}
