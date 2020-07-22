<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MapArea;
use Faker\Generator as Faker;

$factory->define(MapArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
    'map_latitude'=> $faker->latitude($min = -90, $max = 90),
    'map_longitude'=> $faker->longitude($min = -180, $max = 180),
    ];
});
