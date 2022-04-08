<?php

namespace App\Traits;

trait Language
{
    public function lang(string $lang)
    {
        if ($lang == 'en') {
            $lang = 'en';
        } else {
            $lang = 'vn';
        }
        return $lang;
    }
}
