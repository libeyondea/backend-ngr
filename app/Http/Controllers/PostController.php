<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Models\Post;
use App\Traits\ApiResponser;

class PostController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $posts = new Post();
        $postsCount = $posts->get()->count();
        $posts = $posts->pagination();
        return $this->respondSuccessWithPagination(new PostCollection($posts), $postsCount);
    }
}
