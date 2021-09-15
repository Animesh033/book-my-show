<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Database\Seeder;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theater::factory()
            ->count(10)
            ->has(Movie::factory()->count(3))
            ->create();
    }
}
