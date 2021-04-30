<?php

use Faker\Generator as Faker;

$factory->define(App\Tipos_clientes::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text($masNbChars = 20),
    ];
});
