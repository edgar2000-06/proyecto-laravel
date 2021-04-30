@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('perfil') }}"><i class="fa fa-user"></i> Perfil</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Perfil actual</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('perfil.update', $usuario) }}">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name', $usuario->name) }}" id="name" class="form-control" placeholder="Ingresar nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="NombreDeCampo">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingresar contraseña">
                            <span class="help-block">Dejar en blanco si no quieres cambiar la contraseña</span>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="NombreDeCampo">Repetir contraseña</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repite la contraseña">
                        </div>
                        <button class="btn btn-primary btn-block">Actualizar usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
