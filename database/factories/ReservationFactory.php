<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        return [
            'table_id' => $this->faker->numberBetween(1, 15), // 15 tables for the restaurant
            'start_time' => $this->faker->dateTimeBetween('+1 day', '+1 week'),
            'end_time' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
        ];
    }
}
