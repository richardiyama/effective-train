<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OriginalService;
use Faker\Generator as Faker;

$factory->define(OriginalService::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'standard_service_id'=>$faker->numberBetween(1,5),
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        
    ];
});
