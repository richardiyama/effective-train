<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WidgetTwo;
use Faker\Generator as Faker;

$factory->define(WidgetTwo::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'title' => $faker->sentence,
        'link_title_one'=> $faker->text,
        'link_title_two'=> $faker->text,
        'link_title_three'=> $faker->text,
    ];
});
