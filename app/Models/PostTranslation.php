<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
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
