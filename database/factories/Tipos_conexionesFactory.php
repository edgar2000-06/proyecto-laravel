<?php

use Faker\Generator as Faker;

$factory->define(App\Tipos_conexiones::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text($masNbChars = 20),
    ];
});
