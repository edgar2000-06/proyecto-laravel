<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Condiciones_de_pagos;
use App\Zonas;
use App\Segmentos;
use App\Vendedores;
use App\Tipos_clientes;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Clientes = Clientes::all();
        
        return view('clientes.index', [
            'Clientes' => $Clientes,
        ]);
    }
    public function show(Clientes $cliente)
    {
        $Zonas = Zonas::all();
        $Segmentos = Segmentos::all();
        $Vendedores = Vendedores::all();
        $Tipos_clientes = Tipos_clientes::all();
        $Condiciones_de_pagos = Condiciones_de_pagos::all();

        return view('clientes.show', [
            'Zonas'                 => $Zonas, 
            'Segmentos'             => $Segmentos, 
            'Vendedores'            => $Vendedores, 
            'Tipos_clientes'        => $Tipos_clientes, 
            'Condiciones_de_pagos'  => $Condiciones_de_pagos,
            ], compact('cliente')
        );
    }
    public function create()
    {
        $Zonas = Zonas::all();
        $Segmentos = Segmentos::all();
        $Vendedores = Vendedores::all();
        $Tipos_clientes = Tipos_clientes::all();
        $Condiciones_de_pagos = Condiciones_de_pagos::all();

        return view('clientes.create', compact(
            'Condiciones_de_pagos', 
            'Zonas', 
            'Segmentos', 
            'Vendedores', 
            'Tipos_clientes'
                ));
    }
    public function store()
    {   
        $data = request()->validate([
            'name'              => 'required',
            'raz-soc'           => 'required',
            'rif'               => 'required',
            'direc-fisc'        => 'required',
            'direc-ent'         => 'required',
            'email'             => 'required',
            'telefono'          => 'required',
            'porcentaje'        => 'required',
            'zona'              => 'required',
            'tipo-cliente'      => 'required',
            'segmento'          => 'required',
            'vendedor'          => 'required',
            'condicion-pago'    => 'required',
            'inactivo'          => 'boolean',
            'agente-ret'        => 'boolean',
        ]);
        
        Clientes::create([
            'nombre_completo'       => $data['name'],
            'razon_social'          => $data['raz-soc'],
            'rif'                   => $data['rif'],
            'direccion_fiscal'      => $data['direc-fisc'],
            'direccion_entrega'     => $data['direc-ent'],
            'email'                 => $data['email'],
            'telefono'              => $data['telefono'],
            'inactivo'              => $data['inactivo'],
            'agente_retencion'      => $data['agente-ret'],
            'porc_dec_global'       => $data['porcentaje'],
            'id_zona'               => $data['zona'],
            'id_tipo_cliente'       => $data['tipo-cliente'],
            'id_segmento'           => $data['segmento'],
            'id_vendedor'           => $data['vendedor'],
            'id_condicionDePago'    => $data['condicion-pago'],
        ]);

        return redirect()->route('cliente.index');
    }
    public function edit(Clientes $cliente)
    {
        $Zonas = Zonas::all();
        $Segmentos = Segmentos::all();
        $Vendedores = Vendedores::all();
        $Tipos_clientes = Tipos_clientes::all();
        $Condiciones_de_pagos = Condiciones_de_pagos::all();

        return view('clientes.edit', compact(
            'cliente',
            'Condiciones_de_pagos', 
            'Zonas', 
            'Segmentos', 
            'Vendedores', 
            'Tipos_clientes'));
    }
    public function update(Clientes $cliente)
    {   
       
        $rules = [
            'nombre_completo'       => 'required',
            'razon_social'          => 'required',
            'rif'                   => 'required',
            'direccion_fiscal'      => 'required',
            'direccion_entrega'     => 'required',
            'email'                 => 'required',
            'telefono'              => 'required',
            'porc_dec_global'       => 'required',
            'id_zona'               => 'required',
            'id_tipo_cliente'       => 'required',
            'id_segmento'           => 'required',
            'id_vendedor'           => 'required',
            'id_condicionDePago'    => 'required',
            'inactivo'              => 'boolean',
            'agente_retencion'      => 'int',
        ];
        
        $data = request()->validate($rules);
        $cliente->update($data);
        
        return redirect()->route('cliente.edit', $cliente)->withFlash('Cliente actualizado');
    }
    public function destroy(Clientes $cliente)
    {   
        $cliente->delete();

        return redirect()->route('cliente.index')->withFlash("Cliente ({$cliente->nombre_completo}) eliminado");
    }
}
