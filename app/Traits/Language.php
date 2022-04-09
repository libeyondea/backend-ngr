<?php

namespace App\Traits;

trait Language
{
    public function lang($lang)
    {
        if ($lang == 'en') {
            $lang = 'en';
        } else {
            $lang = 'vn';
        }
        return $lang;
    }
}
