<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MileStone extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('milestones', function(Blueprint $table)
		{
			  $table->increments('id');				
			  $table->binary('status');
			  $table->integer('projectId'); // Relation To The Project Index Table
			  $table->string('description');
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
		Schema::table('milestones', function(Blueprint $table)
		{
			 Schema::drop('milestones');
		});
	}

}
