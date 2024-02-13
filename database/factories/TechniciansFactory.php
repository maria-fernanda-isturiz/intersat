<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technicians>
 */
class TechniciansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastName,
            'address' => $this->faker->address,
            'phone' => 22222222,
            'email' => 'example@gmail.com',
            'password' => 00000000,
        ];
    }
}
