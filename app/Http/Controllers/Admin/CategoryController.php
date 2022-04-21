<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Traits\ApiResponser;
use App\Models\Category;
use App\Http\Resources\Admin\Category\CategoryCollection;
use App\Http\Resources\Admin\Category\CategoryResource;
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
		foreach ($request->translations as $key => $translation) {
			if (CategoryTranslation::where('language_id', $translation['language_id'])->where('slug', Str::slug($translation['slug'] ?? $translation['name'], '-'))->exists()) {
				return $this->respondError(
					'The given data was invalid.',
					[
						'translations.' . $key . '.slug' => ['The slug has already been taken.']

					]
				);
			}
		}

		$categoryData = $request->all();
		$category = Category::create($categoryData);

		foreach ($request->translations as $key => $translation) {
			CategoryTranslation::create([
				'category_id' => $category->id,
				'name' => $translation['name'],
				'slug' => Str::slug($translation['slug'] ?? $translation['name'], '-'),
				'language_id' => $translation['language_id'],
			]);
		}

		return $this->respondSuccess(new CategoryResource($category));
	}

	public function update(UpdateCategoryRequest $request, $id)
	{
		foreach ($request->translations as $key => $translation) {
			if (CategoryTranslation::where('language_id', $translation['language_id'])->where('slug', Str::slug($translation['slug'] ?? $translation['name'], '-'))->where('category_id', '!=', $id)->exists()) {
				return $this->respondError(
					'The given data was invalid.',
					[
						'translations.' . $key . '.slug' => ['The slug has already been taken.']

					]
				);
			}
		}

		$categoryData = $request->all();
		$category = Category::findOrFail($id);
		$category->update($categoryData);

		foreach ($request->translations as $key => $translation) {
			$categoryTranslation = CategoryTranslation::where('category_id', $category->id)->where('language_id', $translation['language_id'])->first();
			$categoryTranslation->update([
				'name' => $translation['name'],
				'slug' => Str::slug($translation['slug'] ?? $translation['name'], '-'),
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
