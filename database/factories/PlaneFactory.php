<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plane>
 */
class PlaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'registration'=> $this->faker->company(),
            'imgplane'=> $this->faker->image(),
            'seats'=> $this->faker->numberBetween($min = 200, $max = 250)
        ];
    }
}
