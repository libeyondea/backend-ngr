<?php

namespace App\Models;

use App\Traits\PaginationScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, PaginationScope;

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
        return $this->hasMany(PostTranslations::class, 'post_id', 'id');
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? config('app.img_url') . '/' . $this->image : config('app.img_url') . '/' . 'default-image.png';
    }
}
