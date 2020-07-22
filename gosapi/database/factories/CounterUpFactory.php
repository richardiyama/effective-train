<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CounterUp;
use Faker\Generator as Faker;

$factory->define(CounterUp::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
    'counter_num' => $faker->randomDigit,
    'title' => $faker->sentence,
    ];
});
