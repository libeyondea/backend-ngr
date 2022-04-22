<?php

namespace App\Http\Resources\Admin\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class PostTranslationResource extends JsonResource
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
			'post_id' => $this->post_id,
			'title' => $this->title,
			'slug' => $this->slug,
			'excerpt' => $this->excerpt,
			'content' => $this->content,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'language' => $this->language,
		];
	}
}
