<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 shop items using the factory
        Shop::factory()->count(10)->create();
    }
}
