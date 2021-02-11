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
            'title' => 'required|unique:posts|max:255',
            'categories_id' => 'required',
            'short_description' => 'required|max:255',
            'content' => 'required',
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,gif,png'
        ];
    }
}
