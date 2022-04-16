<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryTranslation extends Model
{
	use HasFactory;

	protected $fillable = [
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

	public function setSlugAttribute()
	{
		$this->attributes['slug'] = Category::where('slug', Str::slug($this->name, '-'))->exists()
			? Str::slug($this->name, '-') . '-' .  Str::lower(Str::random(6))
			: Str::slug($this->name, '-');
	}
}
