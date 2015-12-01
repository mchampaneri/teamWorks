<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaskList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tasks', function(Blueprint $table)
		{
			  $table->increments('id');
			  $table->string('task');			
			  $table->integer('mileStoneId'); // Relation To The Mile Stone Table
			  $table->integer('unfId'); // Id Field From Integration Table
			  $table->binary('status');
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
		Schema::table('tasks', function(Blueprint $table)
		{
			   Schema::drop('tasks');
		});
	}

}
