<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'user_id' => $this->faker->randomElement(User::pluck('id')),
			'category_id' => $this->faker->randomElement(Category::pluck('id')),
			'image' => 'test.png',
			'status' => 'publish',
		];
	}
}
