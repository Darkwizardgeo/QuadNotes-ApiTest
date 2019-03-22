<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Notes::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text(25)
    ];
});