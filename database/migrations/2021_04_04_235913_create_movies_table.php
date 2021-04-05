<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumText('description');
            $table->integer('releaseYear')->unsigned();
            $table->time('runningTime');
            $table->integer('age')->unsigned();
            $table->string('coverPic');
            $table->boolean('category');    // TV show or Movie
            $table->string('quality');
            $table->string('video');
            $table->decimal('rating')->unsigned();
            $table->boolean('status');      // visible or hidden
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
        Schema::dropIfExists('movies');
    }
}
