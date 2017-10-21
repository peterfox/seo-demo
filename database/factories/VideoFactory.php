<?php

use Faker\Generator as Faker;

$factory->define(\App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->words(5, true),
        'description' => $faker->realText(1000),
    ];
});
