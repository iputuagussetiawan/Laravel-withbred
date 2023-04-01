<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'user_id' => 11,
            'category_id'=>mt_rand(1,2),
            'title' => fake()->sentence(mt_rand(2,8)),//generate title with minimal text 8 and max 8 text
            'slug'=>fake()->slug(),
            'body' => fake()->paragraph(),
            'excerpt'=> fake()->paragraph(mt_rand(5,10)),
            'created_at' => date("Y-m-d H:i:s")
        ];
    }
}
