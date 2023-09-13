<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_quantity' => $this->faker->randomDigit,
            'total_price' => $this->faker->randomNumber(5),
            'order_date' => $this->faker->dateTime,
            'client_id' => $this->faker->randomDigit,
            'product_id' => $this->faker->randomDigit,
        ];
    }
}
