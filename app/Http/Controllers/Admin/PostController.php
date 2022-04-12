<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
