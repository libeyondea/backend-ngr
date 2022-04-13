<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Http\Resources\PostCollection;
use App\Http\Controllers\Controller;
use App\Models\Post;

class SearchController extends Controller
{
	use ApiResponser;

	public function search(Request $request)
	{
		$posts = Post::whereHas('postTranslations', function ($q) use ($request) {
			$q->where('title', 'like', '%' . $request->q . '%');
		});
		$postsCount = $posts->get()->count();
		$posts = $posts->pagination();
		return $this->respondSuccessWithPagination(new PostCollection($posts), $postsCount);
	}
}
