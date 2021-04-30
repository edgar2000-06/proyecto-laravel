<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Segmentos;
use Illuminate\Http\Request;

class SegmentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Segmentos = Segmentos::all();
        
        return view('Segmentos.index', [
            'Segmentos' => $Segmentos,
        ]);
    }
    public function create()
    {
        return view('Segmentos.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => ['required', 'unique:Segmentos,nombre']
        ], [
            'name.unique' => 'Este nombre ya fue registrado',]);
        
        Segmentos::create([
            'nombre' => $data['name'],
        ]);

        return redirect()->route('segmento.index');
    }
    public function edit(Segmentos $segmento)
    {
        return view('Segmentos.edit', compact('segmento'));
    }
    public function update(Segmentos $segmento)
    {   
        $rules = [
            'nombre' => 'required',
        ];

        $data = request()->validate($rules);
        
        $segmento->update($data);

        return redirect()->route('segmento.edit', $segmento)->withFlash('Segmento actualizado');
    }
    public function destroy(Segmentos $segmento)
    {   
        $segmento->delete();

        return redirect()->route('segmento.index')->withFlash("Segmento ({$segmento->nombre}) eliminado");
    }
}
