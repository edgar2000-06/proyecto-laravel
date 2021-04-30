<?php

use Faker\Generator as Faker;

$factory->define(App\Zonas::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text($maxNBChars = 20),
    ];
});
