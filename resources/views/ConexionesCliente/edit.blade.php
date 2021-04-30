@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('concli.index') }}"><i class="fa fa-link"></i> Conexión de clientes</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Conexión de cliente Actual (N° {{$conexion_cliente->id}})</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('concli.update', $conexion_cliente) }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" value="{{ old('descripcion', $conexion_cliente->descripcion) }}" id="descripcion" class="form-control" placeholder="Ingresar descripción" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="activo">Activo</label>
                            <input type="numb" name="activo" value="{{ old('activo', $conexion_cliente->activo) }}" id="activo" class="form-control" placeholder="Ingresar Activo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha de emisión</label>
                            <input type="date" name="fecha" value="{{ old('fecha', $conexion_cliente->fec_emis) }}" id="fecha" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="id_cliente">Cliente</label>
                            <select name="id_cliente" id="id_cliente" class="form-control">
                                @foreach ($Clientes as $cliente)
                                    <option value="{{ $cliente['id'] }}">{{ $cliente['nombre_completo'] }}</option>
                                @if ($conexion_cliente->id_cliente === $cliente->id)  
                                    <option value="{{ $cliente['id'] }}" selected>{{ $cliente['nombre_completo'] }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="id_tipo_cone">Tipo de conexión</label>
                            <select name="id_tipo_cone" id="id_tipo_cone" class="form-control">
                                @foreach ($Tipos_conexiones as $tipo_conex)
                                    <option value="{{ $tipo_conex['id'] }}">{{ $tipo_conex['nombre'] }}</option>
                                @if ($conexion_cliente->id_tipo_cone === $tipo_conex->id)  
                                    <option value="{{ $tipo_conex['id'] }}" selected>{{ $tipo_conex['nombre'] }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6"><br>
                            <button class="btn btn-primary btn-block">Actualizar conexión de clientes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection