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
            'description'=>'required|max:40',
            //
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'nombre',
            'description'=>'decripcion'
            //
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'Debes ingresar el nombre',
            //
        ];
    }
}
