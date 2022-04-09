<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use App\Traits\ApiResponser;

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
}
