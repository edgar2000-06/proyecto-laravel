<?php

namespace App\Http\Controllers;

use App\Tipos_conexiones;

class TipoConexionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Tipos_conexiones = Tipos_conexiones::all();
        
        return view('TipoConex.index', [
            'Tipos_conexiones' => $Tipos_conexiones,
        ]);
    }
    public function create()
    {
        return view('TipoConex.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => ['required', 'unique:Segmentos,nombre']
        ], [
            'name.unique' => 'Este nombre ya fue registrado',]);
        
        Tipos_conexiones::create([
            'nombre' => $data['name'],
        ]);

        return redirect()->route('tipcon.index');
    }
    public function edit(Tipos_conexiones $tipoconexion)
    {
        return view('TipoConex.edit', compact('tipoconexion'));
    }
    public function update(Tipos_conexiones $tipoconexion)
    {   
        $rules = [
            'nombre' => 'required',
        ];

        $data = request()->validate($rules);
        
        $tipoconexion->update($data);

        return redirect()->route('tipcon.edit', $tipoconexion)->withFlash('Tipo de conexión actualizada');
    }
    public function destroy(Tipos_conexiones $tipoconexion)
    {   
        $tipoconexion->delete();

        return redirect()->route('tipcon.index')->withFlash("Tipo de conexión ({$tipoconexion->nombre}) eliminada");
    }
}
