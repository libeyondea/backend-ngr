<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_translations', function (Blueprint $table) {
			$table->id();
			$table->foreignId('category_id')->constrained('categories');
			$table->foreignId('language_id')->constrained('languages');
			$table->string('name');
			$table->string('slug');
			$table->unique(['category_id', 'language_id']);
			$table->unique(['category_id', 'language_id', 'slug']);
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
		Schema::dropIfExists('category_translations');
	}
}
