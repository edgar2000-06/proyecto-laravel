@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('user.index') }}"><i class="fa fa-users"></i> Usuarios</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuario actual (N° {{$user->id}})</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('user.update', $user) }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" id="name" class="form-control" placeholder="Ingresar nombre" required>
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
                        <div class="form-group col-md-6">
                            <label for="is_admin" class="NombreDeCampo">Administrador</label><br>
                            @if ($user->is_admin == 1)
                                <input type="hidden" name="is_admin" value="0">
                                <input type="checkbox" name="is_admin" id="is_admin" value="1" checked>
                            @else
                                <input type="hidden" name="is_admin" value="0">
                                <input type="checkbox" name="is_admin" id="is_admin" value="1">
                            @endif
                        </div>
                        <button class="btn btn-primary btn-block">Actualizar usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
