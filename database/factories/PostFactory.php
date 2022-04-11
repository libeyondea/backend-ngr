<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$title = Str::remove('.', $this->faker->sentence());
		return [
			'user_id' => $this->faker->randomElement(User::pluck('id')),
			'category_id' => $this->faker->randomElement(Category::pluck('id')),
			'slug' => Str::slug($title, '-') . '-' . Str::lower(Str::random(6)),
			'image' => 'test.png',
			'status' => 'publish',
		];
	}
}
