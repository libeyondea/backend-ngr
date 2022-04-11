<?php

namespace App\Http\Requests\Api;

use App\Traits\CustomFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdviseRequest extends FormRequest
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
			'name' => 'required|string|max:40',
			'email' => 'required|string|email|max:255',
			'phone_number' => 'required|string|min:3|max:20',
			'content' => 'required|string|max:6000',
		];
	}
}
