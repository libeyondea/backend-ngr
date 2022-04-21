<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Http\Resources\Api\Post\PostCollection;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Category\CategoryCollection;
use App\Http\Resources\Api\Tag\TagCollection;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class SearchController extends Controller
{
	use ApiResponser;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function search(Request $request, $type = 'post')
	{
		$type = $request->get('type', $type);

		if ($type == 'post') {
			$models = Post::translationAndFilter('postTranslations', ['title', 'slug', 'excerpt']);
			$modelsCount = $models->get()->count();
			$models = $models->pagination();
			$resources = new PostCollection($models);
		} elseif ($type == 'category') {
			$models = Category::translationAndFilter('categoryTranslations', ['name', 'slug']);
			$modelsCount = $models->get()->count();
			$models = $models->pagination();
			$resources = new CategoryCollection($models);
		} elseif ($type == 'tag') {
			$models = Tag::where('name', 'like', '%' . $request->q . '%');
			$modelsCount = $models->get()->count();
			$models = $models->pagination();
			$resources = new TagCollection($models);
		} else {
			$modelsCount = 0;
			$resources = null;
		}

		return $this->respondSuccessWithPagination($resources, $modelsCount);
	}
}
