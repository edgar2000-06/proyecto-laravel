<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string|min:6',
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect('/home');
        }

        return back()->withErrors(['email' => 'Estas credenciales no concuerdan con nuestros registros'])
            ->withInput(request(['email']));
    }

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
