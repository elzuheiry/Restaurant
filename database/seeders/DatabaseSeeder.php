<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $this->call(LaratrustSeeder::class);
        $this->call(CreateClientSeeder::class);

        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
    	foreach (range(1,200) as $index) {
            DB::table('types')->insert([
                'name' => $faker->name($gender),
                'slug' => $faker->slug(),
            ]);
        }

        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
    	foreach (range(1,20) as $index) {
            DB::table('food')->insert([
                'type_id' => $faker->randomNumber(1, 20),
                'name' => $faker->name($gender),
                'slug' => $faker->slug(),
                'description' => $faker->text(),
                'price' => $faker->randomNumber(3),
                'alias' => $faker->word(),
                'discount_value' => $faker->randomNumber(2),
            ]);
        }
    }
}