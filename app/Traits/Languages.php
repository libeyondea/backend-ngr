<?php

namespace App\Traits;

use App\Models\Language;

trait Languages
{
	public function translation($key)
	{
		$language = new Language();
		if (request()->lang == 'en') {
			$language = $language->where('code', 'en')->firstOrFail();
		} else {
			$language = $language->where('code', 'vi')->firstOrFail();
		}

		$translation = $this->postTranslations->where('language_id', $language->id)->first();

		if ($translation) {
			$translation[$key] = $translation[$key];
		} else {
			$translation[$key] = null;
		}

		return $translation[$key];
	}
}
