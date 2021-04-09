<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_series', function(Blueprint $table){
            $table->integer('seriesID')->unsigned();
            $table->integer('commentID')->unsigned();
            $table->foreign('seriesID')
                ->references('id')
                ->on('series')
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
        Schema::dropIfExists('comment_series');
    }
}
