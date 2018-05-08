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
$factory->define(App\Models\Banner::class, function (Faker\Generator $faker) {

    return [
        'image' => $faker->imageUrl(1920, 1080, 'transport', true, '', false),
        'title' => $faker->words(3, true),
        'description' => $faker->text(255),
        'active' => true,
    ];
});
