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
			if (request()->q && is_array($keys)) {
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

	public function scopeTranslation($query, $relation, $relationMore = [])
	{
		$language = new Language();
		if (request()->lang == 'en') {
			$translation = $query->withAndWhereHas($relation, function ($q) use ($language, $relationMore) {
				$q->where('language_id', $language->where('code', 'en')->firstOrFail()->id)->where($relationMore);;
			});
		} elseif (request()->lang == '*') {
			$translation = $query->withAndWhereHas($relation, function ($q) use ($relationMore) {
				$q->where($relationMore);
			});
		} else {
			$translation = $query->withAndWhereHas($relation, function ($q) use ($language, $relationMore) {
				$q->where('language_id', $language->where('code', 'vi')->firstOrFail()->id)->where($relationMore);
			});
		}

		return $translation;
	}

	public function translationTest($relation, $key)
	{
		$language = new Language();
		if (request()->lang == 'en') {
			$translation = $this->$relation->where('language_id', $language->where('code', 'en')->firstOrFail()->id)->first()->$key ?? null;
		} elseif (request()->lang == '*') {
			$translation = [
				'vi' => $this->$relation->where('language_id', $language->where('code', 'vi')->firstOrFail()->id)->first()->$key ?? null,
				'en' => $this->$relation->where('language_id', $language->where('code', 'en')->firstOrFail()->id)->first()->$key ?? null,
			];
		} else {
			$translation = $this->$relation->where('language_id', $language->where('code', 'vi')->firstOrFail()->id)->first()->$key ?? null;
		}

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
