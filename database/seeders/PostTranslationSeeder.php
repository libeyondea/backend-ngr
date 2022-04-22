<?php

namespace Database\Seeders;

use App\Models\PostTranslation;
use Illuminate\Database\Seeder;

class PostTranslationSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		PostTranslation::factory(200)->create();
	}
}
