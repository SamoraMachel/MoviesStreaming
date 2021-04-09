<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_series', function (Blueprint $table) {
            $table->integer("genreID")->unsigned();
            $table->integer('seriesID')->unsigned();
            $table->foreign('genreID')
                ->references('id')
                ->on('genres')
                ->onDelete('cascade');
            $table->foreign('seriesID')
                ->references('id')
                ->on('series')
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
        Schema::dropIfExists('genre_series');
    }
}
