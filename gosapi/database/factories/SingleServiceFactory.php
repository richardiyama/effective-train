<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SingleService;
use Faker\Generator as Faker;

$factory->define(SingleService::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    
    ];
});
