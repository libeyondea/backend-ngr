<?php

namespace App\Http\Requests\Admin;

use App\Traits\CustomFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
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
            'name' => 'required|string|max:255',
        ];
    }
}
