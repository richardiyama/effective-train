<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BreadCrump;
use Faker\Generator as Faker;

$factory->define(BreadCrump::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
    ];
});
