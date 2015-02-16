<?php
// created using: artisan migrate:make create_stats_table --create=stats
// file: xxxx_xx_xx_xxxxxx_create_stats_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('quiz_id');
            $table->string('option');
            $table->unsignedInteger('vote_count');
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
        Schema::drop('stats');
    }

}
