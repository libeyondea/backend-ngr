<?php

namespace App\Models;

use App\Traits\CustomScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	use HasFactory, CustomScope;
}
