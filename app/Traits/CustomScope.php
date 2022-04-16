<?php

namespace App\Traits;

use App\Models\Language;

trait CustomScope
{
	public function scopeTranslationAndFilter($query, $relation, $keys = [])
	{
		$language = new Language();
		if (request()->lang == 'en') {
			$language = $language->where('code', 'en')->firstOrFail();
		} else {
			$language = $language->where('code', 'vi')->firstOrFail();
		}

		$translation = $query->withAndWhereHas($relation, function ($q) use ($keys, $language) {
			if (request()->q) {
				$q->where(function ($subQuery) use ($keys) {
					foreach ($keys as $key) {
						$subQuery->orWhere($key, 'like', '%' . request()->q . '%');
					}
				});
			}
			$q->where('language_id', $language->id);
		});

		return $translation;
	}

	public function scopeWithAndWhereHas($query, $relation, $constraint)
	{
		return $query->whereHas($relation, $constraint)->with([$relation => $constraint]);
	}

	public function scopePagination($query, $page = 1, $pageSize = 10,  $sortDirection = 'desc', $sortBy = 'created_at')
	{
		$page = request()->get('page', $page);
		$pageSize = request()->get('page_size', $pageSize);
		$sortDirection = request()->get('sort_direction', $sortDirection);
		$sortBy = request()->get('sort_by', $sortBy);

		if ($sortDirection != 'asc') {
			$sortDirection = 'desc';
		}

		return $query->orderBy($sortBy, $sortDirection)->skip(($page - 1) * $pageSize)->limit($pageSize)->get();
	}
}
