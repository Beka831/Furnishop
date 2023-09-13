<?php

namespace Database\Seeders;


use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $sellers_id = DB::table('sellers')->pluck('seller_id')->toArray();
        $categories_id = DB::table('categories')->pluck('category_id')->toArray();

        foreach (range(1,10) as $index) {
            DB::table('products')->insert([
                    'product_name' => $faker->name,
                    'product_image' => $faker->imageUrl(640, 480, 'products'),
                    'product_price' => $faker->randomNumber(5),
                    'product_description' => $faker->sentence,
                    'product_quantity' => $faker->randomDigit,
                    'seller_id' => $faker->randomElement($sellers_id),
                    'category_id' => $faker->randomElement($categories_id),
            ]);
        }
    }
}
