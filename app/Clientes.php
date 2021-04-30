<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre_completo',
        'razon_social',
        'rif',
        'direccion_fiscal',
        'direccion_entrega',
        'email',
        'telefono',
        'inactivo',
        'agente_retencion',
        'porc_dec_global',
        'id_zona',
        'id_tipo_cliente',
        'id_segmento',
        'id_vendedor',
        'id_condicionDePago',
    ];
}
