<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\CustomFormRequest;

class UpdatePostRequest extends FormRequest
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
			'translations.*.title' => 'required|string|max:255',
			'translations.*.excerpt' => 'required|string|max:666',
			'translations.*.content' => 'required|string|max:60000',
			'translations.*.language_id' => 'required|integer',
			'image' => 'nullable|string|max:255',
			'status' => 'required|string|in:publish,pending,draft,trash',
			'category_id' => 'required|integer',
			'tags' => 'required|array|min:1|max:66',
			'tags.*.name' => 'required|string|max:66'
		];
	}
}
