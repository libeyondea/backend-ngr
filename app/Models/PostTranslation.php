<?php

namespace App\Models;

use App\Traits\CustomScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
	use HasFactory, CustomScope;

	protected $fillable = [
		'title',
		'slug',
		'content',
		'excerpt',
		'language_id',
		'post_id',
	];

	public function post()
	{
		return $this->belongsTo(Post::class, 'post_id', 'id');
	}

	public function language()
	{
		return $this->belongsTo(Language::class, 'language_id', 'id');
	}
}
