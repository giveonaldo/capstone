<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petani>
 */
class PetaniFactory extends Factory
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
            'deskripsi' => fake()->paragraph(),
            'jenis_usaha' => fake()->randomElement(['Padi', 'Sayur', 'Buah']),
            'luas_lahan' => fake()->randomFloat(2, 1, 100),
            'akun_bank' => fake()->iban()
        ];
    }
}
