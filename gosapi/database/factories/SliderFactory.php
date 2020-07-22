<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'text_position'=> $faker->text,
        'bg_Image' =>$faker->imageUrl(1920, 700),
        'category'=> $faker->sentence,
        'description'=> $faker->paragraph,
        'button_text'=> $faker->text,
        'button_link'=> $faker->text,
        'home_id' => $faker->numberBetween(1,1),
    ];
});
