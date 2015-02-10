<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('fname', 50);
			$table->string('lname', 50);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->timestamps();
			$table->string('token', 100);
			$table->rememberToken();
			$table->string('FBauth_token', 255);
			$table->string('googleauth_token', 255);
			$table->string('p_dir', 60);
			$table->integer('stats_id')->unsigned();
			$table->foreign('stats_id')->references('id')->on('stats');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
