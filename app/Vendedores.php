<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $fillable = [
        'nombre_completo',
        'cedula', 
        'email',
        'telefono',
        'direccion',
        'porceComisionVenta',
        'porceComisionCobro',
    ];
}
