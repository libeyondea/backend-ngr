<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class PostController extends Controller
{
	use ApiResponser;

	public function index(Request $request)
	{
		$posts = new Post();

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

	public function show($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		return $this->respondSuccess(new PostResource($post));
	}
}
