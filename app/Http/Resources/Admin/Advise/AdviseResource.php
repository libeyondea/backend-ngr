<?php

namespace App\Http\Resources\Admin\Advise;

use Illuminate\Http\Resources\Json\JsonResource;

class AdviseResource extends JsonResource
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
			'email' => $this->email,
			'phone_number' => $this->phone_number,
			'content' => $this->content,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		];
	}
}
