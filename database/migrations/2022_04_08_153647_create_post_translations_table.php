<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_translations', function (Blueprint $table) {
			$table->id();
			$table->foreignId('post_id')->constrained('posts');
			$table->foreignId('language_id')->constrained('languages');
			$table->string('title');
			$table->string('slug');
			$table->string('excerpt', 666);
			$table->text('content');
			$table->unique(['post_id', 'language_id']);
			$table->unique(['slug', 'language_id']);
			$table->unique(['post_id', 'slug', 'language_id']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('post_translations');
	}
}
