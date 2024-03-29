<?php

namespace App\Models;

use App\Traits\CustomScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
	use HasFactory, CustomScope, NodeTrait;

	protected $fillable = [
		'parent_id',
		'name',
		'slug',
	];

	public function posts()
	{
		return $this->hasMany(Post::class, 'category_id', 'id');
	}

	/* public function categoryTranslations()
	{
		return $this->hasMany(CategoryTranslation::class, 'category_id', 'id');
	} */

	public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id', 'id');
	}

	public function children()
	{
		return $this->hasMany(Category::class, 'parent_id', 'id');
	}

	/* public function getNameAttribute()
	{
		return $this->translationTest('categoryTranslations', 'name');
	}

	public function getSlugAttribute()
	{
		return $this->translationTest('categoryTranslations', 'slug');
	} */
}
