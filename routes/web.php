<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Pagína principal y login...
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', 'DashboardController@index')
    ->name('dashboard');
Route::get('/usuario', 'UsuarioController@index')
    ->name('perfil');
Route::get('/usuario/editar', 'UsuarioController@edit')
    ->name('perfil.edit');
Route::patch('/usuario/editar', 'UsuarioController@update')
    ->name('perfil.update');

//Sección usuarios...
Route::get('/users', 'UserController@index')
    ->name('user.index');
Route::get('users/nuevo', 'UserController@create')
    ->name('user.create');
Route::post('/users', 'UserController@store');
Route::get('/users/{user?}/editar', 'UserController@edit')
    ->name('user.edit');
Route::put('/users/{user?}/editar', 'UserController@update')
    ->name('user.update');
Route::delete('/users/{user?}', 'UserController@destroy')
    ->name('user.destroy');

//Sección vendedores...
Route::get('/vendedores', 'VendedorController@index')
    ->name('vendedor.index');
Route::get('vendedores/nuevo', 'VendedorController@create')
    ->name('vendedor.create');
Route::post('/vendedores', 'VendedorController@store');
Route::get('/vendedores/{vendedor?}/editar', 'VendedorController@edit')
    ->name('vendedor.edit');
Route::put('/vendedores/{vendedor?}/editar', 'VendedorController@update')
    ->name('vendedor.update');
Route::delete('/vendedores/{vendedor?}', 'VendedorController@destroy')
    ->name('vendedor.destroy');

//Sección condiciones de pago...
Route::get('/condisiones-pago', 'CondicionPagoController@index')
    ->name('condicion-pago.index');
Route::get('condisiones-pago/nueva', 'CondicionPagoController@create')
    ->name('condicion-pago.create');
Route::post('/condisiones-pago', 'CondicionPagoController@store');
Route::get('/condiciones-pago/{condicion?}/editar', 'CondicionPagoController@edit')
    ->name('condicion-pago.edit');
Route::put('/condiciones-pago/{condicion?}/editar', 'CondicionPagoController@update')
    ->name('condicion-pago.update');
Route::delete('/condiciones-pago/{condicion?}', 'CondicionPagoController@destroy')
    ->name('condicion-pago.destroy');

//Sección segmentos...
Route::get('/segmentos', 'SegmentoController@index')
    ->name('segmento.index');
Route::get('segmentos/nuevo', 'SegmentoController@create')
    ->name('segmento.create');
Route::post('/segmentos', 'SegmentoController@store');
Route::get('segmentos/editar', 'SegmentoController@edit')
    ->name('segmento.edit');
Route::get('/segmentos/{segmento?}/editar', 'SegmentoController@edit')
    ->name('segmento.edit');
Route::put('/segmentos/{segmento?}/editar', 'SegmentoController@update')
    ->name('segmento.update');
Route::delete('/segmentos/{segmento?}', 'SegmentoController@destroy')
    ->name('segmento.destroy');

//Sección zonas...
Route::get('/zonas', 'ZonaController@index')
    ->name('zona.index');
Route::get('zonas/nueva', 'ZonaController@create')
    ->name('zona.create');
Route::post('/zonas', 'ZonaController@store');
Route::get('/zonas/{zona?}/editar', 'ZonaController@edit')
    ->name('zona.edit');
Route::put('/zonas/{zona?}/editar', 'ZonaController@update')
    ->name('zona.update');
Route::delete('/zonas/{zona?}', 'ZonaController@destroy')
    ->name('zona.destroy');

//Sección tipos de clientes...
Route::get('/tipos-clientes', 'TipoClienteController@index')
    ->name('tipcli.index');
Route::get('tipos-clientes/nuevo', 'TipoClienteController@create')
    ->name('tipcli.create');
Route::post('/tipos-clientes', 'TipoClienteController@store');
Route::get('/tipos-clientes/{tipocliente?}/editar', 'TipoClienteController@edit')
    ->name('tipcli.edit');
Route::put('/tipos-clientes/{tipocliente?}/editar', 'TipoClienteController@update')
    ->name('tipcli.update');
Route::delete('/tipos-clientes/{tipocliente?}', 'TipoClienteController@destroy')
    ->name('tipcli.destroy');

//Sección tipos de conexiones...
Route::get('/tipos-conexiones', 'TipoConexionController@index')
    ->name('tipcon.index');
Route::get('tipos-conexiones/nueva', 'TipoConexionController@create')
    ->name('tipcon.create');
Route::post('/tipos-conexiones', 'TipoConexionController@store');
Route::get('/tipos-conexiones/{tipoconexion?}/editar', 'TipoConexionController@edit')
    ->name('tipcon.edit');
Route::put('/tipos-conexiones/{tipoconexion?}/editar', 'TipoConexionController@update')
    ->name('tipcon.update');
Route::delete('/tipos-conexiones/{tipoconexion?}', 'TipoConexionController@destroy')
    ->name('tipcon.destroy');

//Sección clientes...
Route::get('/clientes', 'ClienteController@index')
    ->name('cliente.index');
Route::get('/clientes/{cliente?}/ver', 'ClienteController@show')
    ->name('cliente.show');
Route::get('clientes/nuevo', 'ClienteController@create')
    ->name('cliente.create');
Route::post('/clientes', 'ClienteController@store');
Route::get('/clientes/{cliente?}/editar', 'ClienteController@edit')
    ->name('cliente.edit');
Route::put('/clientes/{cliente?}/editar', 'ClienteController@update')
    ->name('cliente.update');
Route::delete('/clientes/{cliente?}', 'ClienteController@destroy')
    ->name('cliente.destroy');

//Sección contactos...
Route::get('/contactos', 'ContactoController@index')
    ->name('contacto.index');
Route::get('contactos/nuevo', 'ContactoController@create')
    ->name('contacto.create');
Route::post('/contactos', 'ContactoController@store');
Route::get('/contactos/{contacto?}/editar', 'ContactoController@edit')
    ->name('contacto.edit');
Route::put('/contactos/{contacto?}/editar', 'ContactoController@update')
    ->name('contacto.update');
Route::delete('/contactos/{contacto?}', 'ContactoController@destroy')
    ->name('contacto.destroy');

//Sección conexiones de clientes...
Route::get('/conexiones-clientes', 'ConexionClienteController@index')
    ->name('concli.index');
Route::get('conexiones-clientes/nueva', 'ConexionClienteController@create')
    ->name('concli.create');
Route::post('/conexiones-clientes', 'ConexionClienteController@store');
Route::get('/conexiones-clientes/{conexion_cliente?}/editar', 'ConexionClienteController@edit')
    ->name('concli.edit');
Route::put('/conexiones-clientes/{conexion_cliente?}/editar', 'ConexionClienteController@update')
    ->name('concli.update');
Route::delete('/conexiones-clientes/{conexion_cliente?}', 'ConexionClienteController@destroy')
    ->name('concli.destroy');

// Authentication Routes...
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');