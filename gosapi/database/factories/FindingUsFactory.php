<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FindingUs;
use Faker\Generator as Faker;

$factory->define(FindingUs::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    'service_booking_url'=>$faker->word,
    ];
});
