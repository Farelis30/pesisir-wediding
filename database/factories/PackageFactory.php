<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'thumbnail' => 'https://picsum.photos/800/600?random=' . rand(1, 1000),
            'includes' => json_encode($this->faker->sentences(5)),
            'price' => $this->faker->randomFloat(2, 500, 10000),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
