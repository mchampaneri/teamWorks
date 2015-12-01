<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Integration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('integrations', function(Blueprint $table)
		{
			$table->increments('id'); // unfId Field
			$table->integer('projectId'); // Id field From the projects Table
			$table->integer('memberId'); // Id field From the members Table
			$table->integer('privilageLevel');
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
		Schema::drop('integrations');
	}

}
