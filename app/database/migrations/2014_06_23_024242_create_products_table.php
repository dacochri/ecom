<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
		  $table->increments('id');
      $table->integer('category_id');
      $table->string('name');
      $table->string('image')->nullable();
      $table->decimal('price', 8, 2);
      $table->string('manufacturer')->nullable();
      $table->integer('quantity');
      $table->string('description')->nullable();
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
	  Schema::dropIfExists('products');
	}

}
