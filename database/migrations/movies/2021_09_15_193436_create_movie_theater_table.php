<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTheaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_theater', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('theater_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->time('starts_at', $precision = 0)->nullable();
            $table->time('ends_at', $precision = 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_theater');
    }
}
