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
$factory->define(App\Models\Page::class, function (Faker\Generator $faker) {

    return [
        'image' => $faker->imageUrl(600, 400, 'transport', true, '', false),
        'title' => $faker->words(3, true),
        'description' => $faker->text(255),
        'text' => $faker->paragraphs(2, true),
    ];
});
