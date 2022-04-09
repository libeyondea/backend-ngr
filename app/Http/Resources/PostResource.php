<?php

namespace App\Http\Resources;

use App\Models\Languages;
use App\Traits\Language;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    use Language;
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
            'title' => $this->postTranslations->where('language_id', Languages::where('code', $this->lang($request->lang))->first()->id)->first()->title,
            'slug' => $this->slug,
            'excerpt' => $this->postTranslations->where('language_id', Languages::where('code', $this->lang($request->lang))->first()->id)->first()->excerpt,
            'content' => $this->postTranslations->where('language_id', Languages::where('code', $this->lang($request->lang))->first()->id)->first()->content,
            'image_url' => $this->image_url,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => new UserResource($this->user),
            'category' => new CategoryResource($this->category),
            'tags' => new TagCollection($this->tags),
        ];
    }
}
