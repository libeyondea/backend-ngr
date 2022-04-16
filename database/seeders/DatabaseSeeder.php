<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call([
			UserSeeder::class,
			LanguageSeeder::class,
			CategorySeeder::class,
			CategoryTranslationSeeder::class,
			TagSeeder::class,
			PostSeeder::class,
			PostTranslationSeeder::class,
			PostTagSeeder::class,
		]);
	}
}
