<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostTranslation;
use App\Models\Tag;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
	use ApiResponser;
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$posts = new Post();

		if ($request->has('q')) {
			$posts = $posts->whereHas('postTranslations', function ($q) use ($request) {
				$q->where('title', 'like', '%' . $request->q . '%');
			});
		}

		if ($request->has('status')) {
			if ($request->status === 'publish' || $request->status === 'draft' || $request->status === 'pending' || $request->status === 'pending') {
				$posts = $posts->where('status', $request->status);
			} else {
				$posts = $posts->where('status', '!=', 'trash');
			}
		}

		if ($request->has('tag')) {
			$posts = $posts->whereHas('tags', function ($q) use ($request) {
				$q->where('slug', $request->tag);
			});
		}

		if ($request->has('category')) {
			$posts = $posts->whereHas('category', function ($q) use ($request) {
				$descendantCategories = Category::where('slug', $request->category)->first();
				$q->whereIn('slug', Category::descendantsAndSelf($descendantCategories ? $descendantCategories->id : null)->pluck('slug'));
			});
		}

		$postsCount = $posts->get()->count();
		$posts = $posts->pagination();
		return $this->respondSuccessWithPagination(new PostCollection($posts), $postsCount);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$post = Post::where('id', $id)->where('status', '!=', 'trash')->firstOrFail();
		return $this->respondSuccess(new PostResource($post));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StorePostRequest $request)
	{
		$postData = $request->merge([
			'slug' => Str::slug($request->translations[0]['title'], '-') . '-' . Str::lower(Str::random(6)),
			'user_id' => auth()->user()->id,
		])->all();
		$post = Post::create($postData);

		foreach ($request->translations as $translation) {
			$postTranslation = new PostTranslation();
			$postTranslation->post_id = $post->id;
			$postTranslation->language_id  = $translation['language_id'];
			$postTranslation->title = $translation['title'];
			$postTranslation->excerpt = $translation['excerpt'];
			$postTranslation->content = $translation['content'];
			$postTranslation->save();
		}

		foreach ($request->tags as $tag) {
			$tag = Tag::firstOrCreate([
				'slug' => Str::slug($tag['name'], '-')
			], [
				'name' => $tag['name']
			]);
			PostTag::firstOrCreate([
				'post_id' => $post->id,
				'tag_id' => $tag->id
			]);
		}

		return $this->respondSuccess(new PostResource(Post::find($post->id)));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdatePostRequest $request, $id)
	{
		$postData = $request->merge([
			'user_id' => auth()->user()->id,
		])->all();
		$post = Post::findOrFail($id);
		$post->update($postData);

		foreach ($request->translations as $translation) {
			$postTranslation = PostTranslation::where('post_id', $post->id)->where('language_id', $translation['language_id'])->first();
			$postTranslation->update([
				'title' => $translation['title'],
				'excerpt' => $translation['excerpt'],
				'content' => $translation['content'],
			]);
		}

		$deletePostTag = PostTag::where('post_id', $post->id);
		if ($deletePostTag->first()) {
			$deletePostTag->delete();
		}

		foreach ($request->tags as $tag) {
			$tag = Tag::firstOrCreate([
				'slug' => Str::slug($tag['name'], '-')
			], [
				'name' => $tag['name']
			]);
			PostTag::firstOrCreate([
				'post_id' => $post->id,
				'tag_id' => $tag->id
			]);
		}

		return $this->respondSuccess(new PostResource(Post::find($post->id)));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		return $this->respondSuccess($post);
	}
}
