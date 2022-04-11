<?php

namespace App\Http\Controllers\Api;

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
}
