@extends('layout')

@section('header')
<h1>
    Conexión de clientes
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-link"></i> Conexión de clientes</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de conexiones de clientes</h3>
            <a href="{{ route('concli.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear conexión de cliente
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Descripción</th>
                    <th>Fecha de emisión</th>
                    <th>Activo</th>
                    <th>Cliente</th>
                    <th>Tipo de conexión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Conexiones_clientes as $conexion_cliente)  
                    <tr>
                        <td>{{ $conexion_cliente->id }}</td>
                        <td>{{ $conexion_cliente->descripcion }}</td>
                        <td>{{ $conexion_cliente->fec_emis }}</td>
                        <td>{{ $conexion_cliente->activo }}</td>
                        @foreach ($Clientes as $cliente)
                            @if ($conexion_cliente->id_cliente === $cliente->id)  
                                <td>{{ $cliente->nombre_completo }}</td>
                            @endif
                        @endforeach
                        @foreach ($Tipos_conexiones as $tipo_conex)
                            @if ($conexion_cliente->id_tipo_cone === $tipo_conex->id)  
                                <td>{{ $tipo_conex->nombre }}</td>
                            @endif
                        @endforeach
                        <td>
                            <a href="{{ route('concli.edit', $conexion_cliente) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('concli.destroy', $conexion_cliente) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar esta conexión de cliente?')"
                                ><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@stop