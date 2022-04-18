<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Post\PostCollection;
use App\Http\Resources\Api\Post\PostResource;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Post;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

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
		$posts = Post::where('status', 'publish')->translationAndFilter('postTranslations');

		//return response()->json($posts->get());

		if ($request->has('tag')) {
			$posts = $posts->whereHas('tags', function ($q) use ($request) {
				$q->where('slug', $request->tag);
			});
		}
		if ($request->has('category')) {
			$posts = $posts->whereHas('category', function ($q) use ($request) {
				$categoryTranslation = CategoryTranslation::where('slug', $request->category)->first();
				$descendantCategory = Category::where('id', $descendantCategories->category_id)->translationAndFilter('categoryTranslations')->first();
				$q->whereIn('id', Category::descendantsOf($test ? $descendantCategory->id : null)->pluck('id'));
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
