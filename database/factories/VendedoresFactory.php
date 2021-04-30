<?php

use Faker\Generator as Faker;

$factory->define(App\Vendedores::class, function (Faker $faker) {
    return [
        'nombre_completo' => $faker->name,
        'cedula' => $faker->randomNumber(),
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->randomNumber(),
        'direccion' => $faker->text($maxNBChars = 30),
        'porceComisionVenta' => $faker->randomNumber(),
        'porceComisionCobro' => $faker->randomNumber(),
    ];
});
