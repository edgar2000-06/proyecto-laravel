<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Contactos;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Contactos = Contactos::all();
        $Clientes = Clientes::all();
        
        return view('contactos.index', [
            'Contactos' => $Contactos,
            'Clientes' => $Clientes,
        ]);
    }
    public function create()
    {
        $Clientes = Clientes::all();

        return view('contactos.create', compact(
            'Clientes', 
                ));
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'cargo' => 'required',
            'cliente' => 'required',
        ]);
        
        Contactos::create([
            'nombre_completo' => $data['name'],
            'telefono' => $data['telefono'],
            'celular' => $data['celular'],
            'email' => $data['email'],
            'cargo' => $data['cargo'],
            'id_cliente' => $data['cliente'],
        ]);

        return redirect()->route('contacto.index');
    }
    public function edit(Contactos $contacto)
    {
        $Clientes = Clientes::all();

        return view('contactos.edit', compact('contacto', 'Clientes'));
    }
    public function update(Contactos $contacto)
    {   
        $rules = [
            'nombre_completo'   => 'required',
            'telefono'          => 'required',
            'celular'           => 'required',
            'email'             => 'required',
            'cargo'             => 'required',
            'id_cliente'        => 'required',
        ];

        $data = request()->validate($rules);
        //dd($data);
        $contacto->update($data);

        return redirect()->route('contacto.edit', $contacto)->withFlash('Contacto actualizado');
    }
    public function destroy(Contactos $contacto)
    {   
        $contacto->delete();

        return redirect()->route('contacto.index')->withFlash("Contacto ({$contacto->nombre_completo}) eliminado");
    }
}
