<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,  
        'title' => $faker->sentence,
       'designation'=> $faker->text,  
       'team_image'=>$faker->imageUrl(600, 754),
       
       
    ];
});
