<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Footer;
use Faker\Generator as Faker;

$factory->define(Footer::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
    'social_id'=> $faker->numberBetween(1,4),
    'widget_id'=> $faker->numberBetween(1,1),
    'widget_two_id'=> $faker->numberBetween(1,1),
    'widget_three_id'=> $faker->numberBetween(1,1),
    ];
});
