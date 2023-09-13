<?php

namespace Database\Seeders;

use App\Models\Review;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $clients_id = DB::table('clients')->pluck('client_id');
        $products_id = DB::table('products')->pluck('product_id')->toArray();

        foreach (range(1,10) as $index) {
            DB::table('reviews')->insert([
                'review_text' => $faker->sentence(),
                'review_date' => $faker->dateTime(),
                'client_id' => $faker->randomElement($clients_id),
                'product_id' => $faker->randomElement($products_id),

            ]);
        }   
    }
}
