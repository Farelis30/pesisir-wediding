<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'https://picsum.photos/800/600?random=' . rand(1, 1000),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'cta_text' => $this->faker->randomElement(['Pesan Sekarang', 'Lihat Detail', 'Hubungi Kami']),
            'cta_url' => $this->faker->url(),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
