<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table){
			$table->increments('id');
			$table->integer('category_id');
			$table->foreign('category_id')->references('id')->on('categories');
			$table->string('title');
			$table->text('description');
			$table->decimal('price', 6, 2);
			$table->boolean('availability')->default(1);
			$table->string('image');
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
		Schema::drop('products');
	}

}