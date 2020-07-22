<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BreadCrumbArea;
use Faker\Generator as Faker;

$factory->define(BreadCrumbArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
