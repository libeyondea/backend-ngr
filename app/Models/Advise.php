<?php

namespace App\Models;

use App\Traits\PaginationScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
	use HasFactory, PaginationScope;

	protected $fillable = [
		'name',
		'email',
		'phone_number',
		'content',
	];
}
