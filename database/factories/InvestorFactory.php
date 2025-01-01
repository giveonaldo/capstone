<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investor>
 */
class InvestorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'email' => fake()->email(),
            'nomor_telpon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'foto' => fake()->imageUrl(),
            'saldo' => fake()->numberBetween(40000000, 100000000)
        ];
    }
}
