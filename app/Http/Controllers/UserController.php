<?php

namespace App\Http\Controllers;

use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store()
    {   
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'is_admin' => 'boolean',
            'password' => 'required'
        ]);
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_admin' => $data['is_admin']
        ]);

        return redirect()->route('user.index');
    }
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(User $user)
    {   
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
        
        $user->update($data);


        return redirect()->route('user.edit', $user)->withFlash('Usuario actualizado');
    }
    public function destroy(User $user)
    {   
        $user->delete();

        return redirect()->route('user.index')->withFlash("Usuario ({$user->name}) eliminado");
    }
}