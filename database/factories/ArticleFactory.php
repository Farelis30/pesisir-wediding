<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::where('role', 'admin')->inRandomOrder()->first()->id ?? User::factory(),
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->optional()->sentence,
            'type' => $this->faker->randomElement(['trend', 'tips', 'tutorial']),
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(3, true),
            'thumbnail' => 'https://picsum.photos/800/600?random=' . rand(1, 1000),
            'published_date' => $this->faker->optional()->dateTimeThisYear(),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
