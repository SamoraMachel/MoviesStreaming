<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_movies', function (Blueprint $table) {
            $table->integer('movieID')->unsigned();
            $table->integer('commentID')->unsigned();
            $table->foreign('movieID')
                ->references('id')
                ->on('movies')
                ->onDelete('cascade');
            $table->foreign('commentID')
                ->references('id')
                ->on('comments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_movies');
    }
}
