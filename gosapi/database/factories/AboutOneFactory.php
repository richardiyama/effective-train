<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AboutOne;
use Faker\Generator as Faker;

$factory->define(AboutOne::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'about_image' =>$faker->imageUrl(750, 813),
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
