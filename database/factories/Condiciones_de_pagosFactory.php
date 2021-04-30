<?php

use Faker\Generator as Faker;

$factory->define(App\Condiciones_de_pagos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text($maxNBChars = 15),
        'dias' => $faker->randomNumber(),
    ];
});
