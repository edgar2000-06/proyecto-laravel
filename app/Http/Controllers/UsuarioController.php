<?php

namespace App\Http\Controllers;

use App\User;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        return view('usuario.index');
    }
    public function edit()
    {
        $usuario = User::find(auth()->user()->id);

        return view('usuario.edit')->with('usuario', $usuario);
    }
    public function update()
    {   
        $usuario = User::find(auth()->user()->id);

        $data = request()->validate([
            'name' => 'required',
            'is_admin' => 'boolean',
            'password' => ''
        ]);

        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        
        $usuario->update($data);

        return redirect()->route('perfil.edit')->withFlash('Usuario actualizado');
    }
}
