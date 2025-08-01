<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
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
            'nis' => fake()->unique()->numerify('######'), // 6 digit unik
            'kelas' => fake()->randomElement([
                'X IPA 1', 'X IPA 2', 'XI IPA 1', 'XI IPA 2',
                'XII IPA 1', 'XII IPA 2', 'X IPS 1', 'X IPS 2'
            ]),
            'status' => fake()->randomElement(['aktif', 'non-aktif']),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
