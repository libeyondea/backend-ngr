<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\CustomFormRequest;
use Illuminate\Support\Str;

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
			'title' => 'required|string|max:255',
			'slug' => 'required|string|max:255|unique:posts',
			'excerpt' => 'required|string|max:666',
			'content' => 'required|string|max:60000',
			'image' => 'nullable|string|max:255',
			'status' => 'required|string|in:publish,pending,draft,trash',
			'category_id' => 'required|integer',
			'tags' => 'required|array|min:1|max:66',
			'tags.*.name' => 'required|string|max:66',
		];
	}

	protected function prepareForValidation()
	{
		$this->merge([
			'slug' => Str::slug($this->slug ?? $this->title, '-'),
		]);
	}
}
