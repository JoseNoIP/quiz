<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('question_id')->unsigned();
            $table->string('name', 60);
            $table->string('image', 60);
            $table->tinyInteger('correct');
            $table->tinyInteger('active');

            $table->foreign('question_id')
              ->references('id')
              ->on('questions')
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
        Schema::drop('options');
    }
}
