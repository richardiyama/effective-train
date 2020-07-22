<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NameItemTwo;
use Faker\Generator as Faker;

$factory->define(NameItemTwo::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
    'title_one' => $faker->sentence,
    'title_two' => $faker->sentence,
    'title_three' => $faker->sentence,
    ];
});
