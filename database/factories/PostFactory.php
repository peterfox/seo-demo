<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->words(5, true);

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'content' => $faker->realText(1000),
    ];
});
