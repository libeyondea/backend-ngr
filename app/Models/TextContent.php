<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextContent extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(Translations::class, 'text_content_id', 'id');
    }
}
