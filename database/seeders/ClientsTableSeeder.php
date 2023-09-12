<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 10 clients
        Client::factory(10)->create();
    }
}
