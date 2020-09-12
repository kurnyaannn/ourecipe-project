<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(App\Models\Recipe::class, function (Faker\Generator $faker) {
        return [      
            'title' => $faker->name,
            'duration' => $faker->randomNumber(3),
            'category' => $faker->randomNumber(8),
            'fee' => $faker->randomNumber(5),
            'type' => $faker->randomElement(['1', '2']),
        ];
    });
}
