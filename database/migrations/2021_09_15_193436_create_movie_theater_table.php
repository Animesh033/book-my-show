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
            $table->id();
            $table->foreignId('movie_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('theater_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('starts_at', $precision = 0)->nullable();
            $table->dateTime('ends_at', $precision = 0)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('movie_theater');
    }
}
