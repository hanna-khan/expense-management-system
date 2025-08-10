<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'user_id' => User::factory(), // null for global category
            'name' => $this->faker->word(),
            'budget' => $this->faker->optional()->randomFloat(2, 50, 5000),
            'color' => $this->faker->safeHexColor(),
            'icon' => $this->faker->optional()->randomElement([
                'shopping-cart',
                'utensils',
                'home',
                'car',
                'heart',
                'gift'
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
