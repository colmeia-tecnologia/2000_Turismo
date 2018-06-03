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
$factory->define(App\Models\BusSale::class, function (Faker\Generator $faker) {

    return [
        'model' => $faker->words(2, true),
        'bodyModel' => $faker->words(3, true),
        'year' => rand(1980, 2018),
        'seatings' => rand(1, 42),
        'description' => $faker->text(255),
        'active' => rand(0,1),
    ];
});
