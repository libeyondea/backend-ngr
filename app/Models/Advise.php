<?php

namespace App\Models;

use App\Traits\CustomScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
	use HasFactory, CustomScope;

	protected $fillable = [
		'name',
		'email',
		'phone_number',
		'content',
	];
}
