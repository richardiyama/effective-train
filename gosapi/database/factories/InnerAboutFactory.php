<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\InnerAbout;
use Faker\Generator as Faker;

$factory->define(InnerAbout::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
    ];
});
