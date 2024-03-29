<?php

namespace App\Http\Resources\Api\Feedback;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource
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
			'name' => $this->name,
			'avatar_url' => $this->avatar_url,
			'content' => $this->content,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		];
	}
}
