<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Traits\ApiResponser;
use App\Models\Category;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;

class CategoryController extends Controller
{
    use ApiResponser;
    
    public function index()
    {
        $categories = new Category();
        $categoriesCount = $categories->get()->count();
		$categories = $categories->whereNull('parent_id')->pagination();
		return $this->respondSuccessWithPagination(new CategoryCollection($categories), $categoriesCount);
    }

    public function store(StoreCategoryRequest $request)
	{
		$categoryData = $request->merge([
			'slug' => Category::where('slug', Str::slug($request->name, '-'))->exists() ? Str::slug($request->name, '-') . '-' .  Str::lower(Str::random(6)) : Str::slug($request->name, '-'),
		])->all();
		$category = Category::create($categoryData);
		return $this->respondSuccess(new CategoryResource($category));
	}

    public function update(UpdateCategoryRequest $request, $id)
    {
        $categoryData = $request->merge([
            'slug' => Category::where('slug', Str::slug($request->name, '-'))->where('id', '!=', $id)->exists() ? Str::slug($request->name, '-') . '-' .  Str::lower(Str::random(6)) : Str::slug($request->name, '-'),
        ])->all();
		$category = Category::findOrFail($id);
        $category->update($categoryData);
        return $this->respondSuccess(new CategoryResource($category));
    }

    public function destroy($id)
	{
		$category = Category::findOrFail($id);
		$category->delete();
		return $this->respondSuccess(new CategoryResource($category));
	}
}
