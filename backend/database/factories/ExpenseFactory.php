<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(3),
            'amount' => $this->faker->randomFloat(2, 5, 5000),
            'date' => $this->faker->date(),
            'description' => $this->faker->optional()->paragraph(),
            'receipt_path' => $this->faker->optional()->imageUrl(400, 300, 'receipt'),
            'payment_method' => $this->faker->randomElement(['Cash', 'Credit Card', 'Debit Card', 'Bank Transfer']),
            'is_recurring' => $this->faker->boolean(20), // 20% chance
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
