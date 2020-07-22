<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CounterArea;
use Faker\Generator as Faker;

$factory->define(CounterArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'content'=> $faker->paragraph,
    ];
});
