<?php

namespace App\Models;

use App\Traits\PaginationScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	use HasFactory, PaginationScope;

	public function posts()
	{
		return $this->belongsToMany(Post::class, 'post_tags');
	}
}
