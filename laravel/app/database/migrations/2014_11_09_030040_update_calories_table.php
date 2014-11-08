<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCaloriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('calories', function(Blueprint $table)
		{
			$table->dropColumn('calorie');
		});
		Schema::table('calories', function(Blueprint $table)
		{
			$table->float('calorie')->unsigned()->after('unit');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('calories', function(Blueprint $table)
		{
			$table->dropColumn('calorie');
		});
	}

}
