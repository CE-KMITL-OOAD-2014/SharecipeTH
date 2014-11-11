<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaloriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',50);
			$table->integer('quantity')->unsigned();
			$table->string('unit');
			$table->float('calorie')->unsigned();
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
		Schema::drop('calories');
	}

}
