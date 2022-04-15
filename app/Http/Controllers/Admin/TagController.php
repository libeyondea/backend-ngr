<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagCollection;
use App\Models\Tag;
use App\Traits\ApiResponser;

class TagController extends Controller
{
	use ApiResponser;

	public function index()
	{
		$tags = new Tag();
		$tagsCount = $tags->get()->count();
		$tags = $tags->pagination();
		return $this->respondSuccessWithPagination(new TagCollection($tags), $tagsCount);
	}

	public function store(StoreTagRequest $request)
	{
		$tagData = $request->merge([
			'slug' => Tag::where('slug', Str::slug($request->name, '-'))->exists() ? Str::slug($request->name, '-') . '-' .  Str::lower(Str::random(6)) : Str::slug($request->name, '-'),
		])->all();
		$tag = Tag::create($tagData);
		return $this->respondSuccess(new TagResource($tag));
	}

    public function update(UpdateTagRequest $request, $id)
    {
        $tagData = $request->merge([
            'slug' => Tag::where('slug', Str::slug($request->name, '-'))->where('id', '!=', $id)->exists() ? Str::slug($request->name, '-') . '-' .  Str::lower(Str::random(6)) : Str::slug($request->name, '-'),
        ])->all();
		$tag = Tag::findOrFail($id);
        $tag->update($tagData);
        return $this->respondSuccess(new TagResource($tag));
    }

    public function destroy($id)
	{
		$tag = Tag::findOrFail($id);
		$tag->delete();
		return $this->respondSuccess(new TagResource($tag));
	}
}
