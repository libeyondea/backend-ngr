<?php

namespace App\Http\Resources\Admin\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryTranslationResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'category_id' => $this->category_id,
			'name' => $this->name,
			'slug' => $this->slug,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'language' => $this->language,
		];
	}
}
