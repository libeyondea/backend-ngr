<?php

namespace Database\Seeders;

use App\Models\Advise;
use Illuminate\Database\Seeder;

class AdviseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Advise::factory(20)->create();
	}
}
