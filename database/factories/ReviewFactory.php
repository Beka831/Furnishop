<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review.php>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => $client->id,
            'review_text' => $this->faker->sentence,
            'review_date' => $this->faker->dateTime,
            'product_id' => $this->faker->randomDigit,
        ];
    }
}
