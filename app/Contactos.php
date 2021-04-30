<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $fillable = [
        'nombre_completo',
        'telefono',
        'celular',
        'email',
        'cargo',
        'id_cliente',
    ];
}
