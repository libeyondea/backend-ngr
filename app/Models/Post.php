<?php

namespace App\Models;

use App\Traits\CustomScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use HasFactory, CustomScope;

	protected $fillable = [
		'slug',
		'image',
		'status',
		'category_id',
		'user_id',
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function postTranslations()
	{
		return $this->hasMany(PostTranslation::class, 'post_id', 'id');
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class, 'post_tags');
	}

	public function getImageUrlAttribute()
	{
		return $this->image ? config('app.img_url') . '/' . $this->image : config('app.img_url') . '/' . 'default-image.png';
	}

	public function getTitleAttribute()
	{
		return $this->postTranslations->first()->title ?? null;
	}

	public function getSlugAttribute()
	{
		return $this->postTranslations->first()->slug ?? null;
	}

	public function getExcerptAttribute()
	{
		return $this->postTranslations->first()->excerpt ?? null;
	}

	public function getContentAttribute()
	{
		return $this->postTranslations->first()->content ?? null;
	}
}
