<?php

namespace App\Http\Controllers;

use App\Vendedores;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $vendedores = Vendedores::all();
        
        return view('vendedores.index', [
            'vendedores' => $vendedores,
        ]);
    }
    public function create()
    {
        return view('vendedores.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => 'required',
            'cedula' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'porc-com-ven' => 'required',
            'porc-com-cob' => 'required',
        ]);
        
        Vendedores::create([
            'nombre_completo' => $data['name'],
            'cedula' => $data['cedula'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'porceComisionVenta' => $data['porc-com-ven'],
            'porceComisionCobro' => $data['porc-com-cob'],
        ]);

        return redirect()->route('vendedor.index');
    }
    public function edit(Vendedores $vendedor)
    {
        return view('vendedores.edit', compact('vendedor'));
    }
    public function update(Vendedores $vendedor)
    {   
        $rules = [
            'name' => 'required',
            'cedula' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'porc-com-ven' => 'required',
            'porc-com-cob' => 'required',
        ];

        $data = request()->validate($rules);
        
        $vendedor->update($data);


        return redirect()->route('vendedor.edit', $vendedor)->withFlash('Vendedor actualizado');
    }
    public function destroy(Vendedores $vendedor)
    {   
        $vendedor->delete();

        return redirect()->route('vendedor.index')->withFlash("Vendedor ({$vendedor->nombre_completo}) eliminado");
    }
}
