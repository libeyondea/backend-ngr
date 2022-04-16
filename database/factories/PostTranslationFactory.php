<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostTranslationFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$title = Str::remove('.', $this->faker->sentence());

		$posts_count = Post::all()->count();
		$languages_count = Language::all()->count();
		$post_languages = [];
		for ($i = 1; $i <= $posts_count; $i++) {
			for ($j = 1; $j <= $languages_count; $j++) {
				array_push($post_languages, $i . '-' . $j);
			}
		}
		$post_and_language = $this->faker->unique->randomElement($post_languages);
		$post_and_language = explode('-', $post_and_language);
		$post_id = $post_and_language[0];
		$language_id = $post_and_language[1];

		return [
			'post_id' => $post_id,
			'language_id' => $language_id,
			'title' => $title,
			'slug' => Str::slug($title, '-') . '-' . Str::lower(Str::random(6)),
			'excerpt' => $this->faker->paragraph(),
			'content' => $this->faker->text(666),
		];
	}
}
