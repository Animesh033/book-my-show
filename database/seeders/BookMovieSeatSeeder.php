<?php

namespace Database\Seeders;

use App\Models\BookMovieSeat;
use Illuminate\Database\Seeder;

class BookMovieSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookMovieSeat::factory()
            ->count(10)
            ->create();
    }
}
