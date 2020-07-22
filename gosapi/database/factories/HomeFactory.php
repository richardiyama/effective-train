<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Home;
use Faker\Generator as Faker;

$factory->define(Home::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'single_service_id'=> $faker->numberBetween(1,1),
        'counter_up_area_id'=> $faker->numberBetween(1,1),
        'about_two_id'=> $faker->numberBetween(1,1),
        'title' => $faker->sentence,
        'about_one_id' => $faker->numberBetween(1,2),
    ];
});
