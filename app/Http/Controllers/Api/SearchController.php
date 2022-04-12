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
        $post = Post::whereHas('postTranslations', function ($q) use ($request) {
            $q->where('title', 'like', '%' . $request->q . '%');
        });
        $postcount = $post->get()->count();
        $post = $post->pagination();
        return $this->respondSuccessWithPagination(new PostCollection($post), $postcount);
    }
}
