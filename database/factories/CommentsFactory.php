<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
     return [
        'body' => $faker->text,
        'post_id' => function(){
            return Post::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        }
    ];
});
