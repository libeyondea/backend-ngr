<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [

			'name' => $this->faker->name(),
			'avatar' => 'test.png',
			'content' => $this->faker->text(100),
		];
	}
}
