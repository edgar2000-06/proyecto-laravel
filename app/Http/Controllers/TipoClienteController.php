<?php

namespace App\Http\Controllers;

use App\Tipos_clientes;

class TipoClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Tipos_clientes = Tipos_clientes::all();
        
        return view('TipoClien.index', [
            'Tipos_clientes' => $Tipos_clientes,
        ]);
    }
    public function create()
    {
        return view('TipoClien.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => ['required', 'unique:Segmentos,nombre']
        ], [
            'name.unique' => 'Este nombre ya fue registrado',]);
        
        Tipos_clientes::create([
            'nombre' => $data['name'],
        ]);

        return redirect()->route('tipcli.index');
    }
    public function edit(Tipos_clientes $tipocliente)
    {
        return view('TipoClien.edit', compact('tipocliente'));
    }
    public function update(Tipos_clientes $tipocliente)
    {   
        $rules = [
            'nombre' => 'required',
        ];

        $data = request()->validate($rules);
        
        $tipocliente->update($data);

        return redirect()->route('tipcli.edit', $tipocliente)->withFlash('Tipo de cliente actualizado');
    }
    public function destroy(Tipos_clientes $tipocliente)
    {   
        $tipocliente->delete();

        return redirect()->route('tipcli.index')->withFlash("Tipo de cliente ({$tipocliente->nombre}) eliminado");
    }
}
