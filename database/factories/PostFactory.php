<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'user_id' => User::factory()->create(),
            'category_id' => Category::factory()->create(),
            'title' => fake()->sentence(),
            'thumbnail' => "thumbnails/illustration-".rand(1,5).".png",
            'excerpt' => fake()->paragraphs(2, true),
            'body' => fake()->paragraphs(6, true),
        ];
    }
}
