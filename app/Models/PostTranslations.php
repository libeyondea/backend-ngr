<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslations extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function language()
    {
        return $this->belongsTo(Languages::class, 'language_id', 'id');
    }
}
