<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHomepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_color', 7);
            $table->string('title_color', 7);
            $table->string('font_color', 7);
            $table->string('background_color', 7);
            $table->string('ci_button_color', 45);
            $table->string('ci_button_font_color', 45);
            $table->string('template', 45);
            $table->string('image',60);
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
        Schema::drop('homepage');
    }
}
