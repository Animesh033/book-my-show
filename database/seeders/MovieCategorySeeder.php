<?php

namespace Database\Seeders;

use App\Models\MovieCategory;
use Illuminate\Database\Seeder;

class MovieCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieCategory::factory()
            ->count(10)
            ->hasMovies(2)
            ->create();
    }
}
