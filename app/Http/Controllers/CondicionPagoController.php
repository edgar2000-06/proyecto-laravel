<?php

namespace App\Http\Controllers;

use App\Condiciones_de_pagos;
use Illuminate\Http\Request;

class CondicionPagoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Condiciones_de_pagos = Condiciones_de_pagos::all();
        
        return view('CondicionesPago.index', [
            'Condiciones_de_pagos' => $Condiciones_de_pagos,
        ]);
    }
    public function create()
    {
        return view('CondicionesPago.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => 'required',
            'dias' => 'required',
        ]);
        
        Condiciones_de_pagos::create([
            'nombre' => $data['name'],
            'dias' => $data['dias'],
        ]);

        return redirect()->route('condicion-pago.index');
    }
    public function edit(Condiciones_de_pagos $condicion)
    {
        return view('CondicionesPago.edit', compact('condicion'));
    }
    public function update(Condiciones_de_pagos $condicion)
    {   
        $rules = [
            'name' => 'required',
            'dias' => 'required',
        ];

        $data = request()->validate($rules);
        
        $condicion->update($data);

        return redirect()->route('condicion-pago.edit', $condicion)->withFlash('Condición de pago actualizada');
    }
    public function destroy(Condiciones_de_pagos $condicion)
    {   
        $condicion->delete();

        return redirect()->route('condicion-pago.index')->withFlash("Condición de pago ({ $condicion->nombre }) eliminada");
    }
}
