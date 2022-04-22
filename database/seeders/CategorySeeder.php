<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$categories = [
			['id' => 1, 'parent_id' => null],
			['id' => 2, 'parent_id' => 1],
			['id' => 3, 'parent_id' => 1],
			['id' => 4, 'parent_id' => 1],
			['id' => 5, 'parent_id' => 1],
			['id' => 6, 'parent_id' => 1],
			['id' => 7, 'parent_id' => 1],
			['id' => 8, 'parent_id' => 1],
			['id' => 9, 'parent_id' => 1],
			['id' => 10, 'parent_id' => 1],
			['id' => 11, 'parent_id' => 1],
			['id' => 12, 'parent_id' => 1],
			['id' => 13, 'parent_id' => 1],
			['id' => 14, 'parent_id' => 1],

			['id' => 15, 'parent_id' => 2],
			['id' => 16, 'parent_id' => 2],
			['id' => 17, 'parent_id' => 2],
			['id' => 18, 'parent_id' => 2],

			['id' => 19, 'parent_id' => 3],
			['id' => 20, 'parent_id' => 3],
			['id' => 21, 'parent_id' => 3],

			['id' => 22, 'parent_id' => 4,],
			['id' => 23, 'parent_id' => 4],
			['id' => 24, 'parent_id' => 4],
			['id' => 25, 'parent_id' => 4],

			['id' => 26, 'parent_id' => 5],
			['id' => 27, 'parent_id' => 5],
			['id' => 28, 'parent_id' => 5],
			['id' => 29, 'parent_id' => 5],

			['id' => 30, 'parent_id' => 6],
			['id' => 31, 'parent_id' => 6],
			['id' => 32, 'parent_id' => 6],

			['id' => 33, 'parent_id' => 7],
			['id' => 34, 'parent_id' => 7],

			['id' => 35, 'parent_id' => 8],
			['id' => 36, 'parent_id' => 8],
			['id' => 37, 'parent_id' => 8],

			['id' => 38, 'parent_id' => 9],
			['id' => 39, 'parent_id' => 9],
			['id' => 40, 'parent_id' => 9],

			['id' => 41, 'parent_id' => 10],
			['id' => 42, 'parent_id' => 10],
			['id' => 43, 'parent_id' => 10],

			['id' => 44, 'parent_id' => 11],
			['id' => 45, 'parent_id' => 11],

			['id' => 46, 'parent_id' => 12],
			['id' => 47, 'parent_id' => 12],

			['id' => 48, 'parent_id' => 13],
			['id' => 49, 'parent_id' => 13],
			['id' => 50, 'parent_id' => 13],

			['id' => 51, 'parent_id' => 14],
			['id' => 52, 'parent_id' => 14],

			['id' => 53, 'parent_id' => NULL],
			['id' => 54, 'parent_id' => 53],
			['id' => 55, 'parent_id' => 54],
			['id' => 56, 'parent_id' => 54],
			['id' => 57, 'parent_id' => 54],
			['id' => 58, 'parent_id' => 54],
			['id' => 59, 'parent_id' => 54],
			['id' => 60, 'parent_id' => 54],

			['id' => 61, 'parent_id' => 53],
			['id' => 62, 'parent_id' => 61],
			['id' => 63, 'parent_id' => 61],
			['id' => 64, 'parent_id' => 61],
			['id' => 65, 'parent_id' => 61],
			['id' => 66, 'parent_id' => 61],
			['id' => 67, 'parent_id' => 61],

			['id' => 68, 'parent_id' => 53],
			['id' => 69, 'parent_id' => 68],
			['id' => 70, 'parent_id' => 68],
			['id' => 71, 'parent_id' => 68],

			['id' => 72, 'parent_id' => NULL],
			['id' => 73, 'parent_id' => 72],
			['id' => 74, 'parent_id' => 72],
			['id' => 75, 'parent_id' => 72],
			['id' => 76, 'parent_id' => 72],
			['id' => 77, 'parent_id' => 72],
			['id' => 78, 'parent_id' => 72],
			['id' => 79, 'parent_id' => 72],
			['id' => 80, 'parent_id' => 72],
			['id' => 81, 'parent_id' => 72],

			['id' => 82, 'parent_id' => NULL],
			['id' => 83, 'parent_id' => 72],
			['id' => 84, 'parent_id' => 72],
			['id' => 85, 'parent_id' => 72],
			['id' => 86, 'parent_id' => 72],
			['id' => 87, 'parent_id' => 72],
			['id' => 88, 'parent_id' => 72],
			['id' => 89, 'parent_id' => 72],

			['id' => 90, 'parent_id' => NULL],
			['id' => 91, 'parent_id' => 90],
			['id' => 92, 'parent_id' => 90],
			['id' => 93, 'parent_id' => 90],
			['id' => 94, 'parent_id' => 90],

			['id' => 95, 'parent_id' => 92],
			['id' => 96, 'parent_id' => 92],
			['id' => 97, 'parent_id' => 92],
		];

		foreach ($categories as $category) {
			Category::create($category);
		}

		Category::fixTree();
	}
}
