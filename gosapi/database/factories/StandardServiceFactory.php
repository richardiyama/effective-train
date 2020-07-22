<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StandardService;
use Faker\Generator as Faker;

$factory->define(StandardService::class, function (Faker $faker) {
    return [
        'name'=> $faker->word, 
        'services_image'=>$faker->imageUrl(285, 210),
        'title' => $faker->sentence,
        'description'=> $faker->paragraph,
        'services_urls' => $faker->url(),
        'home_id' => $faker->numberBetween(1,1),
        'service_done_id'=> $faker->numberBetween(1,5),
        'two_columns_id' => $faker->numberBetween(1,11),
    ];
});
