<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AboutTwo;
use Faker\Generator as Faker;

$factory->define(AboutTwo::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'name_item_one_id'=> $faker->numberBetween(1,1),
        'name_item_two_id'=> $faker->numberBetween(1,1),
        'header_title' => $faker->sentence,
        'about_image' =>$faker->imageUrl(500, 665),
    ];
});
