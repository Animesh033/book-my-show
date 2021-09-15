<?php

namespace Database\Factories;

use App\Models\BookMovieSeat;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookMovieSeatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookMovieSeat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seats' => $this->faker->numberBetween(1, 4),
            'show_at' => date('Y-m-d H:i:s'),
            'movie_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 2),
            'theater_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
