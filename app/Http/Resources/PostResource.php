<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
			'title' => $this->title,
			'slug' => $this->slug,
			'excerpt' => $this->excerpt,
			'content' => $this->content,
			'image_url' => $this->image_url,
			'status' => $this->status,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'user' => new UserResource($this->user),
			'tags' => new TagCollection($this->tags),
			'category' => new CategoryCollection(Category::translationAndFilter('categoryTranslations')->ancestorsAndSelf($this->category_id)->toTree()),
		];
	}
}
