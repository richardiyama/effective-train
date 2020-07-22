<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceDetails;
use Faker\Generator as Faker;

$factory->define(ServiceDetails::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'two_columns_id'=> $faker->numberBetween(1,11),
        'service_image'=>$faker->imageUrl(600, 650),
        'content_one'=> $faker->paragraph,
        'content_two'=> $faker->paragraph,
        'title_one'=> $faker->sentence,
        'list_one'=> $faker->sentence,
        'list_two'=> $faker->sentence,
        'list_three'=> $faker->sentence,
        'list_four'=> $faker->sentence,
        'list_five'=> $faker->sentence,
        'service_booking_url'=> $faker->url(),
        'content_three'=> $faker->paragraph,
        'content_four'=> $faker->paragraph,
        'title_two'=> $faker->sentence,
        'list_six'=> $faker->sentence,
        'list_seven'=> $faker->sentence,
        'list_eight'=> $faker->sentence,
        'service_video'=> $faker->imageUrl(123, 599),
        'finding_us_id'=> $faker->numberBetween(1,1),
        'breadcrumbarea_id'=> $faker->numberBetween(1,7),
        'orignalservice_id' => $faker->numberBetween(1,5),
    ];
});
