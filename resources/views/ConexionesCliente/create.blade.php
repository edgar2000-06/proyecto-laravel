@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('concli.index') }}"><i class="fa fa-link"></i> Conexión de clientes</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nueva</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva conexión de clientes</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('concli.index') }}">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error}}</p><br>
                        @endforeach
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" value="{{ old('descripcion') }}" id="descripcion" class="form-control" placeholder="Ingresar descripción" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="activo">Activo</label>
                            <input type="numb" name="activo" value="{{ old('activo') }}" id="activo" class="form-control" placeholder="Ingresar Activo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha de emisión</label>
                            <input type="date" name="fecha" value="{{ old('fecha') }}" id="fecha" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cliente">Cliente</label>
                            <select name="cliente" id="cliente" class="form-control">
                                @foreach ($Clientes as $cliente)
                                    <option value="{{ $cliente['id'] }}">{{ $cliente['nombre_completo'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo-conex">Tipo de conexión</label>
                            <select name="tipo-conex" id="tipo-conex" class="form-control">
                                @foreach ($Tipos_conexiones as $tipo_conex)
                                    <option value="{{ $tipo_conex['id'] }}">{{ $tipo_conex['nombre'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6"><br>
                        <button class="btn btn-primary btn-block">Crear conexión de clientes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection