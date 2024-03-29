<?php

namespace App\Http\Resources\Api\Advise;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AdviseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return AdviseResource::collection($this->collection);
    }
}
