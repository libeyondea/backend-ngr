<?php

namespace App\Http\Resources\Api\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
			'parent_id' => $this->parent_id,
			/*'translations' => $this->categoryTranslations, */
			'name' => $this->name,
			'slug' => $this->slug,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'children' => new CategoryCollection($this->children),
		];
	}
}
