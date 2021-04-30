@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('user.index') }}"><i class="fa fa-users"></i> Usuarios</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nuevo</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo usuario</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('user.index') }}">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error}}</p><br>
                        @endforeach
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password" class="NombreDeCampo">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Ingresar contraseña" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="is_admin" class="NombreDeCampo">Administrador</label><br>
                            <input type="hidden" name="is_admin" value="0">
                            <input type="checkbox" name="is_admin" id="is_admin" value="1">
                        </div>
                        <div class="col-md-3"><br>
                        <button class="btn btn-primary btn-block">Crear usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection