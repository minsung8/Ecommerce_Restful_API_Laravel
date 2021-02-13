<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Model\Review;
use App\Models\Model\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Model\Product::factory(50)->create();
        \App\Models\Model\Review::factory(300)->create();
    }
}
