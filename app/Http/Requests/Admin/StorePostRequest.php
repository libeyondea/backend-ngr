<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\CustomFormRequest;

class StorePostRequest extends FormRequest
{
    use CustomFormRequest;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|string|max:100',
            'excerpt'=>'required|string|max:400',
            'content'=>'required|string|max:60000',
            'image'=>'required|image|mines:jpeg,jpg,png,gif|max:10000',
            'status'=>'required|string|max:50'
        ];
    }
}
