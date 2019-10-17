<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'price' => $faker->randomDigit,
        'duration' => $faker->randomDigit,
        'description' => $faker->sentence(20),
        'curriculum' => $faker->word,
        'image' => $faker->imageUrl(640, 480)
    ];
});
