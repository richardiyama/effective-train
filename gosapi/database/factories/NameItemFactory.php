<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NameItem;
use Faker\Generator as Faker;

$factory->define(NameItem::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
    'title_one' => $faker->sentence,
    'title_two' => $faker->sentence,
    'title_three' => $faker->sentence,
    'title_four' => $faker->sentence,
    'title_five' => $faker->sentence,
    ];
});
