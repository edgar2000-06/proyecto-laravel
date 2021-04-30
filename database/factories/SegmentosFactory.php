<?php

use Faker\Generator as Faker;

$factory->define(App\Segmentos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text($maxNBChars = 15)
    ];
});
