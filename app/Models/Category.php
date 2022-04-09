<?php

namespace App\Models;

use App\Traits\PaginationScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, PaginationScope;

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
