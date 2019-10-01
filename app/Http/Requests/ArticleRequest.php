<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'requered|min:7',
            'descrption'=>'required|min:7|max:200',
            'category_id'=>'required|numeric|exists:categories,id',
            'resources'=>'requered',
            'resouces.*'=>'image|mimes:jpeg,png'
            //
        ];
    }
}
