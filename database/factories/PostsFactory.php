<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;
use App\Category;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post' => $faker->sentence,
        'slug' => str_slug($faker->sentence),
        'profile_image' => $faker->name,
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
