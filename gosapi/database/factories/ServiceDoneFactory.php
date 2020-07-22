<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceDone;
use Faker\Generator as Faker;

$factory->define(ServiceDone::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'two_columns_id'=> $faker->numberBetween(1,11),
        'service_area_id'=> $faker->numberBetween(1,1),
        'breadcrump_id' =>$faker->numberBetween(1,6),
        
    ];
});
