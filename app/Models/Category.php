<?php

namespace App\Models;

use App\Traits\PaginationScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
	use HasFactory, PaginationScope, NodeTrait;

	protected $fillable = [
			'name',
			'slug',
			'parent_id',
	];

	public function posts()
	{
		return $this->hasMany(Post::class, 'category_id', 'id');
	}

	public function parentCategory()
	{
		return $this->belongsTo(Category::class, 'parent_id', 'id');
	}

	public function childrenCategories()
	{
		return $this->hasMany(Category::class, 'parent_id', 'id');
	}
}
