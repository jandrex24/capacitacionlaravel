<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManteinerRequest extends FormRequest
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
            'email'=>'required|max:40',
            'password'=>'required',
            //
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'nombre',
            'email'=>'e-mail',
            'password'=>'clave'
            //
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'Debes ingresar el nombre',
            'email.required'=>'Debes ingresar el mail',
            'password.required'=>'Debes ingresar el password',
            //
        ];
    }
}
