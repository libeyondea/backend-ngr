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
use App\Models\CategoryTranslation;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	use ApiResponser;

	public function index(Request $request)
	{
		$categories = new Category();
		if ($request->has('q')) {
			$categories = $categories->where('name', 'like', '%' . $request->q . '%');
		}
		$categoriesCount = $categories->get()->count();
		$categories = $categories->whereNull('parent_id')->pagination();
		return $this->respondSuccessWithPagination(new CategoryCollection($categories), $categoriesCount);
	}

	public function show($id)
	{
		$category = Category::findOrFail($id);
		return $this->respondSuccess(new CategoryResource($category));
	}

	public function store(StoreCategoryRequest $request)
	{
		$categoryData = $request->all();
		$category = Category::create($categoryData);

		foreach ($request->translations as $translation) {
			CategoryTranslation::create($translation);
		}

		return $this->respondSuccess(new CategoryResource($category));
	}

	public function update(UpdateCategoryRequest $request, $id)
	{
		$categoryData = $request->all();
		$category = Category::findOrFail($id);
		$category->update($categoryData);

		foreach ($request->translations as $translation) {
			$categoryTranslation = CategoryTranslation::where('category_id', $category->id)->where('language_id', $translation['language_id'])->first();
			$categoryTranslation->update([
				'name' => $translation['name'],
				'slug' => Category::where('slug', Str::slug($translation['name'], '-'))->exists()
					? Str::slug($translation['name'], '-') . '-' .  Str::lower(Str::random(6))
					: Str::slug($translation['name'], '-'),
			]);
		}

		return $this->respondSuccess(new CategoryResource($category));
	}

	public function destroy($id)
	{
		$category = Category::findOrFail($id);
		$category->delete();
		return $this->respondSuccess(new CategoryResource($category));
	}
}
