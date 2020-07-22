<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Header;
use Faker\Generator as Faker;

$factory->define(Header::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'logo_image'=>$faker->imageUrl(284, 199),
    ];
});
