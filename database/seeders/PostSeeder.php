<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/* Post::factory(50)->create(); */

		$json = Storage::disk('public')->get('posts.json');
		$posts = json_decode($json);

		foreach ($posts as $post) {
			Post::create([
				"id" => $post->id,
				"user_id" => $post->user_id,
				"category_id" => $post->category_id,
				"title" => $post->title,
				"slug" =>  Str::slug($post->title, '-') . '-' . Str::lower(Str::random(6)),
				"excerpt" => $post->excerpt,
				"content" => $post->content,
				"image" => $post->image,
				"status" => $post->status,
				"created_at" => $post->created_at,
				"updated_at" => $post->updated_at,
			]);
		}
	}
}
