<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'seller_phone_no' => $this->faker->phoneNumber,
            'tin_no' => $this->faker->randomNumber(6),
        ];
    }
}
