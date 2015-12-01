<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Message extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			  $table->increments('id');			  			  
			  $table->binary('status');
			  $table->integer('taskId'); // Relation To The Task Table
			  $table->integer('unfId'); // Id Field From Integration Table			
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
		Schema::table('messages', function(Blueprint $table)
		{
			Schema::drop('messages');
		});
	}

}
