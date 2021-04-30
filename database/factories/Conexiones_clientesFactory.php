<?php

use Faker\Generator as Faker;

$factory->define(App\Conexiones_clientes::class, function (Faker $faker) {
    return [
    'descripcion' => $faker->text($maxNBChars = 15),
    'fec_emis' => $faker->date(),
    'activo' => $faker->randomNumber(),
    'id_cliente' => App\Clientes::all()->random()->id,
    'id_tipo_cone' => App\Tipos_conexiones::all()->random()->id,
    ];
});
