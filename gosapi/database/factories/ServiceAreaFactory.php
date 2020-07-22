<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceArea;
use Faker\Generator as Faker;

$factory->define(ServiceArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'content'=> $faker->paragraph,
        'content_title'=> $faker->sentence,
    ];
});
