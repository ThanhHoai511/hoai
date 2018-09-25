<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminEditProductRequest extends FormRequest
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
            'name' => 'bail|required|unique:products,name,' .$this->segment(4) . 'id_cate',
            'price' => 'bail|required|numeric',
            'image[]' => 'mimes:jpeg,jpg,png',
            'description' => 'required'
        ];
    }
}
