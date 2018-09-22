<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminEditCategoryRequest extends FormRequest
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
            'name' => 'bail|required|unique:categories,name,' .$this->segment(4) . 'id_cate'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You must input category name!',
            'name.unique' => 'This category name already exists!'
        ];
    }
}
