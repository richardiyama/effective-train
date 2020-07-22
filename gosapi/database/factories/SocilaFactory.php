<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Socila;
use Faker\Generator as Faker;

$factory->define(Socila::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'social_tag'=> $faker->text,
        'social_url'=> $faker->url(),
        'team_id' => $faker->numberBetween(1,6),
    ];
});
