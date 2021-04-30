<?php

namespace App\Http\Controllers;

use App\Zonas;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Zonas = Zonas::all();
        
        return view('zonas.index', [
            'Zonas' => $Zonas,
        ]);
    }
    public function create()
    {
        return view('zonas.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => ['required', 'unique:Segmentos,nombre']
        ], [
            'name.unique' => 'Este nombre ya fue registrado',]);
        
        Zonas::create([
            'nombre' => $data['name'],
        ]);

        return redirect()->route('zona.index');
    }
    public function edit(Zonas $zona)
    {
        return view('zonas.edit', compact('zona'));
    }
    public function update(Zonas $zona)
    {   
        $rules = [
            'nombre' => 'required',
        ];

        $data = request()->validate($rules);
        
        $zona->update($data);

        return redirect()->route('zona.edit', $zona)->withFlash('Zona actualizada');
    }
    public function destroy(Zonas $zona)
    {   
        $zona->delete();

        return redirect()->route('zona.index')->withFlash("Zona ({$zona->nombre}) eliminada");
    }
}
