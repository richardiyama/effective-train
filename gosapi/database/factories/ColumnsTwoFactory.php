<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ColumnsTwo;
use Faker\Generator as Faker;

$factory->define(ColumnsTwo::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'content_one'=> $faker->paragraph,
        'content_two'=> $faker->paragraph,
    ];
});
