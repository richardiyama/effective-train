<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ColumnsThree;
use Faker\Generator as Faker;

$factory->define(ColumnsThree::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'title_one'=> $faker->sentence,
       'content_one'=> $faker->paragraph,
       'title_two'=> $faker->sentence,
     'content_two'=> $faker->paragraph,
    'title_three'=> $faker->sentence,
    'content_three'=> $faker->paragraph,
    ];
});
