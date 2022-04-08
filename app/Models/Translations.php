<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translations extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->belongsTo(Languages::class, 'language_id', 'id');
    }

    public function textContent()
    {
        return $this->belongsTo(TextContent::class, 'text_content_id', 'id');
    }
}
