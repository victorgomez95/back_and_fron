<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 200),
        'price' => $faker->numberBetween(30,3250),
        'picture' =>$faker->imageUrl($width = 640, $height = 480, 'fashion', true, 'Faker'),
        'type_id' => $faker->numberBetween(1,3)
    ];
});
