<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category_name = fake()->sentence(rand(1, 3), false);

        return [
            'name_category' => $category_name,
            'slug' => Str::slug($category_name),
            'description' => fake()->sentence(rand(5, 8), false)
        ];
    }
}
