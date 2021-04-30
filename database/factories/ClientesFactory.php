<?php

use Faker\Generator as Faker;

$factory->define(App\Clientes::class, function (Faker $faker) {
    return [
        'nombre_completo' => $faker->name(),
        'razon_social' => $faker->text($maxNBChars = 25),
        'rif' => $faker->randomNumber(),
        'direccion_fiscal' => $faker->text($maxNBChars = 25),
        'direccion_entrega' => $faker->text($maxNBChars = 25),
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->randomNumber(),
        'inactivo' => 1,
        'agente_retencion' => 1,
        'porc_dec_global' => $faker->randomNumber(),
        'id_zona' => App\Zonas::all()->random()->id,
        'id_tipo_cliente' => App\Tipos_clientes::all()->random()->id,
        'id_segmento' => App\Segmentos::all()->random()->id,
        'id_vendedor' => App\Vendedores::all()->random()->id,
        'id_condicionDePago' => App\Condiciones_de_pagos::all()->random()->id,
    ];
});
