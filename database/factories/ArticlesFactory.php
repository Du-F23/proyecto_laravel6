<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'img'=> $faker->imageUrl($width = 640, $height = 480),
        'subtitle'=> $faker->sentence,
        'body'=> $faker->paragraph(2),
    ];
});
