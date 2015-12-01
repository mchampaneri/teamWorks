<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberIndex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('members', function(Blueprint $table)
		{
			  $table->increments('id');
			  $table->string('person-name');
			  $table->string('skills');
			  $table->string('address');
			  $table->string('contact number');
			  $table->binary('locality');
			  $table->string('email');
			  $table->string('password',64);
			  $table->rememberToken();
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
		Schema::table('members', function(Blueprint $table)
		{
			  Schema::drop('members');
		});
	}

}
