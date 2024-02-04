<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DomicilioFactory extends Factory
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
            'user_id' => fake()->randomElement(User::pluck('id')),
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->citySuffix(),
            'codigo_postal' => fake()->postcode(),
            'ciudad' => fake()->city()
        ];
    }
}
