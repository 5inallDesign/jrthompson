<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function($table)
		{
			$table->timestamps();
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('phone');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('persons');
	}

}
