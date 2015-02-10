<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experiences', function($table)
			{
				$table->engine = 'InnoDB';
				$table->increments('id');
				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('users');
				$table->timestamps();
				$table->text('project_body');
				$table->string('project_url', 60);
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
		Schema::drop('experiences');
	}

}
