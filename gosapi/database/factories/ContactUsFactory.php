<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
    'contact_top_area_id'=> $faker->numberBetween(1,1),
    'map_id'=> $faker->numberBetween(1,1),
    'breadcrumbarea_id'=> $faker->numberBetween(1,7),
    ];
});
