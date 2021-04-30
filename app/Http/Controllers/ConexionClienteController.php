<?php

namespace App\Http\Controllers;

use App\Conexiones_clientes;
use App\Clientes;
use App\Tipos_conexiones;

class ConexionClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Clientes = Clientes::all();
        $Tipos_conexiones = Tipos_conexiones::all();
        $Conexiones_clientes = Conexiones_clientes::all();
        
        return view('ConexionesCliente.index', [
            'Clientes'              => $Clientes,
            'Tipos_conexiones'      => $Tipos_conexiones,
            'Conexiones_clientes'   => $Conexiones_clientes,
        ]);
    }
    public function create()
    {
        $Clientes = Clientes::all();
        $Tipos_conexiones = Tipos_conexiones::all();

        return view('ConexionesCliente.create', compact(
            'Clientes', 
            'Tipos_conexiones',
                ));
    }
    public function store()
    {   
        $data = request()->validate([
            'descripcion'   => 'required',
            'activo'        => 'required',
            'fecha'         => 'required',
            'cliente'       => 'required',
            'tipo-conex'    => 'required',
        ]);
        
        Conexiones_clientes::create([
            'descripcion'   => $data['descripcion'],
            'fec_emis'      => $data['fecha'],
            'activo'        => $data['activo'],
            'id_cliente'    => $data['cliente'],
            'id_tipo_cone'  => $data['tipo-conex'],
        ]);

        return redirect()->route('concli.index');
    }
    public function edit(Conexiones_clientes $conexion_cliente)
    {
        $Clientes = Clientes::all();
        $Tipos_conexiones = Tipos_conexiones::all();

        return view('ConexionesCliente.edit', compact(
            'conexion_cliente', 
            'Clientes', 
            'Tipos_conexiones'));
    }
    public function update(Conexiones_clientes $conexion_cliente)
    {   
        $rules = [
            'descripcion'   => 'required',
            'activo'        => 'required',
            'fecha'         => 'required',
            'id_cliente'    => 'required',
            'id_tipo_cone'  => 'required',
        ];

        $data = request()->validate($rules);
        
        $conexion_cliente->update($data);

        return redirect()->route('concli.edit', $conexion_cliente)->withFlash('Conexión cliente actualizada');
    }
    public function destroy(Conexiones_clientes $conexion_cliente)
    {   
        $conexion_cliente->delete();

        return redirect()->route('concli.index')->withFlash("Conexión cliente ({$conexion_cliente->descripcion}) eliminada");
    }
}
