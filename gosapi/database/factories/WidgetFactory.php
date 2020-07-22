<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Widget;
use Faker\Generator as Faker;

$factory->define(Widget::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'admin_email'=> $faker->unique()->safeEmail,
        'email'=> $faker->unique()->safeEmail,
    
    ];
});
