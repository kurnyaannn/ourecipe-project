<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            DB::table('recipes')->insert([
                'title' => $faker->name,
                'picture' => $faker->image,
                'category' => $faker->name,
                'duration' => $faker->randomNumber(3),
                'ingredient' => $faker->text,
                'detail' => $faker->text,
            ]);
        }
    }
}
