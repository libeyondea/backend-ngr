<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryTranslation extends Model
{
	use HasFactory;

	protected $fillable = [
		'slug',
		'name',
		'language_id',
		'category_id',
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	public function language()
	{
		return $this->belongsTo(Language::class, 'language_id', 'id');
	}

	/* public function setNameAttribute($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = CategoryTranslation::where('slug', Str::slug($value, '-'))->exists()
			&& CategoryTranslation::where('category_id', CategoryTranslation::where('slug', Str::slug($value, '-'))->first()->category_id)->exists()
			&& CategoryTranslation::where('language_id',  CategoryTranslation::where('slug', Str::slug($value, '-'))->first()->language_id)->exists()
			? Str::slug($value, '-') . '-' .  Str::lower(Str::random(6))
			: Str::slug($value, '-');
	} */
}
