<?php

use Faker\Generator as Faker;

$factory->define(App\Contactos::class, function (Faker $faker) {
    return [
        'nombre_completo' => $faker->name(),
        'telefono' => $faker->randomNumber(),
        'celular' => $faker->randomNumber(),
        'email' => $faker->unique()->safeEmail,
        'cargo' => $faker->text($maxNBChars = 10),
        'id_cliente' => App\Clientes::all()->random()->id,
    ];
});
