<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'description' => implode(" ", $this->faker->words(3)),
            'type' => rand(1,2),
            'date' => Carbon::today(),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'user_id' => User::inRandomOrder()->first()->id,
            'status_id' => Status::inRandomOrder()->first()->id,
        ];
    }
}
