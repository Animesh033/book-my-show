<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Movies\TheaterSeeder;
use Database\Seeders\Movies\BookMovieSeatSeeder;
use Database\Seeders\Movies\MovieCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        $this->call([
            MovieCategorySeeder::class,
            TheaterSeeder::class,
            BookMovieSeatSeeder::class
        ]);
    }
}
