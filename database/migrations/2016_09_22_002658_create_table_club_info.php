<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClubInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 500);
            $table->string('vision', 1000);
            $table->string('mission', 1000);
            $table->integer('club_id')->unsigned();
            $table->foreign('club_id')->references('id')->on('club');
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
        Schema::drop('club_info');
    }
}
