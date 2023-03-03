<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->image(),
            'brands' => fake()->name(),
            'in_stock' => fake()->numberBetween(1, 20),
            'price' => fake()->numberBetween(50, 5000),
        ];
    }
}
