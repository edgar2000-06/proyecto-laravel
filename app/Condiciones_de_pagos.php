<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condiciones_de_pagos extends Model
{
    protected $fillable = [
        'nombre',
        'dias',
    ];
}
