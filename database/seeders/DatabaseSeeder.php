<?php

namespace Database\Seeders;

use App\Models\MOdel\Product;
use Database\Factories\MOdel\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\MOdel\Product;
// use App\Models\MOdel\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
