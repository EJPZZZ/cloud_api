<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' =>fake()->numberBetween(1000, 10000),
            'term' => 'montly',
            'colombian_id' =>fake()->numberBetween(1, 10),
            'company_id' =>fake()->numberBetween(1, 10),
            'customer_id' =>fake()->numberBetween(1, 10),
        ];
    }
}
