<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
                // Add policies to tenant DB
                foreach (range(1, 10) as $value) {
                    DB::table('products')->insert([
                        'descripcion' => 'descripcion producto'. $value,
                        'price' => $faker->numberBetween(100, 1000),
                        'stock' => $faker->numberBetween(10, 50)
                    ]);
                }

    }
}
