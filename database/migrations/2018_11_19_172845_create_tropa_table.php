<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTropaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tropa', function(Blueprint $table)
		{
			$table->string('data_1', 50)->nullable();
			$table->string('data_2', 50)->nullable();
			$table->string('data_3', 50)->nullable();
			$table->string('data_4', 50)->nullable();
			$table->string('data_5', 50)->nullable();
			$table->string('data_6', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tropa');
	}

}
