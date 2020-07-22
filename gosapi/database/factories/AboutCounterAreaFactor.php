<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AboutCounterArea;
use Faker\Generator as Faker;

$factory->define(AboutCounterArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'content' => $faker->paragraph,
    ];
});
