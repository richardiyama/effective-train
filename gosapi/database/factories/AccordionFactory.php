<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Accordion;
use Faker\Generator as Faker;

$factory->define(Accordion::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'content_one'=> $faker->paragraph,
        'content_two'=> $faker->paragraph,
        'title_one'=> $faker->sentence,
        'title_two'=> $faker->sentence,
        'title_three'=> $faker->sentence,
        'title_four'=> $faker->sentence,
        'content_three'=> $faker->paragraph,
        'content_four'=> $faker->paragraph,
    ];
});
