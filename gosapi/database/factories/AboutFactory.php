<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'title' => $faker->sentence,
        'inner_about_id' => $faker->numberBetween(1,1),
        'three_columns_id' =>$faker->numberBetween(1,1),
        'finding_us_id' =>$faker->numberBetween(1,1),
        'about_counter_area_id'=>$faker->numberBetween(1,1),
        'breadcrump_id' =>$faker->numberBetween(1,6),
        'two_columns_id'=>$faker->numberBetween(1,11),
        'about_one_id' => $faker->numberBetween(1,2),
    ];
});
