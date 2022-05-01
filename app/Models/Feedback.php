<?php

namespace App\Models;

use App\Traits\CustomScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	use HasFactory, CustomScope;

	protected $fillable = [
		'name',
		'avatar',
		'content',
	];

	public function getAvatarUrlAttribute()
	{
		return $this->avatar ? config('app.img_url') . '/' . $this->avatar : config('app.img_url') . '/' . 'default-avatar.png';
	}
}
