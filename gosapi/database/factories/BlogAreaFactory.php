<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogArea;
use Faker\Generator as Faker;

$factory->define(BlogArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
