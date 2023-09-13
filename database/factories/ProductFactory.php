<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product.php>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $imageUrl = $this->faker->imageUrl(640, 480, 'products');
        $response = Http::get($imageUrl);
        $imageData = $response->body();
        return [
            'product_name' => $this->faker->randomDigit,
            'product_image' => $imageData,
            'product_price' => $this->faker->randomNumber(5),
            'product_description' => $this->faker->sentence,
            'product_quantity' => $this->faker->randomDigit,
            'category_id' => $this->faker->randomDigit,
            'seller_id' => $this->faker->randomDigit,
        ];
    }
}
