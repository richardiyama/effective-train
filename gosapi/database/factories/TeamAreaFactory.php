<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TeamArea;
use Faker\Generator as Faker;

$factory->define(TeamArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
