<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactTopArea;
use Faker\Generator as Faker;

$factory->define(ContactTopArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'phone_title'=> $faker->sentence,
        'phone_number_one'=> $faker->phoneNumber,
        'phone_number_two'=> $faker->phoneNumber,
        'email_title'=> $faker->sentence,
        'email_one'=> $faker->unique()->safeEmail,
        'email_two'=> $faker->unique()->safeEmail,
    ];
});
