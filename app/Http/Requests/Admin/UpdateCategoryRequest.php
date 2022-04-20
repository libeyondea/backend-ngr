<?php

namespace App\Http\Requests\Admin;

use App\Traits\CustomFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
			'translations' => 'required|array|min:1|max:10',
			'translations.*.name' => 'required|string|max:255',
			'translations.*.slug' => 'nullable|string|max:255',
			'translations.*.language_id' => 'required|integer',
			'parent_id' => 'nullable|integer',
		];
	}
}
