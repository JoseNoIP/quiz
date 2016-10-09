<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuperQuizs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_quizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('super')->unsigned();
            $table->bigInteger('sub')->unsigned();

            $table->foreign('super')
              ->references('id')
              ->on('quizs')
              ->onDelete('cascade');
            $table->foreign('sub')
              ->references('id')
              ->on('quizs')
              ->onDelete('cascade');

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
        Schema::drop('super_quizs');
    }
}
