<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->words(5, true);

    return [
        'title' => $title,
        'content' => $faker->realText(1000),
    ];
});
