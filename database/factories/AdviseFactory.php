<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdviseFactory extends Factory
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
			'email' => $this->faker->unique()->safeEmail(),
			'phone_number' => $this->faker->phoneNumber(),
			'content' => $this->faker->text(100),
		];
	}
}
