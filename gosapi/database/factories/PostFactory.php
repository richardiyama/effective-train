<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'title' => $faker->sentence,
        'post_image'=>$faker->imageUrl(390, 532),
        'content_one'=> $faker->paragraph,
        'blog_image'=>$faker->imageUrl(1232, 599),
        'content_two'=> $faker->paragraph,
        'content_three'=> $faker->paragraph,
        'title_two'=> $faker->sentence,
        'content_four'=> $faker->paragraph,
        'blog_image_two'=>$faker->imageUrl(600, 754),
        'title_three'=> $faker->sentence,
        'content_five'=> $faker->paragraph,
        'title_four'=> $faker->sentence,
        'list_one'=> $faker->sentence,
        'list_two'=> $faker->sentence,
        'list_three'=> $faker->sentence,
        'list_four'=> $faker->sentence,
        'list_five'=> $faker->sentence,
        'title_five'=> $faker->sentence,
        'list_six'=> $faker->sentence,
        'list_seven'=> $faker->sentence,
        'list_eight'=> $faker->sentence,
        'list_nine'=> $faker->sentence,
        'content_six'=> $faker->paragraph,
        'blog_video'=> $faker->imageUrl(123, 599),
        'blog_image_three'=>$faker->imageUrl(1232, 599),
        'content_seven'=> $faker->paragraph,
        'home_id'=> $faker->numberBetween(1,1),
        'blog_area_id'=> $faker->numberBetween(1,1),
        'breadcrumbarea_id'=> $faker->numberBetween(1,7),
    ];
});
