<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conexiones_clientes extends Model
{
    protected $fillable = [
        'descripcion',
        'fec_emis',
        'activo',
        'id_cliente',
        'id_tipo_cone',
    ];
}
