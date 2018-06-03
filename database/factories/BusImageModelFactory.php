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
$factory->define(App\Models\BusImage::class, function (Faker\Generator $faker) {

    return [
        'bus_id' => rand(1,10),
        'image' => $faker->imageUrl(1024, 768, 'transport', true, '', false),
        'title' => $faker->words(2, true),
        'description' => $faker->words(10, true),
        'order' => rand(1,10),
    ];
});
