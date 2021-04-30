@extends('layout')

@section('header')
<h1>
    Clientes
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-users"></i> Clientes</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de clientes</h3>
            <a href="{{ route('cliente.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear cliente
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Razón social</th>
                    <th>Rif</th>
                    <th>Correo electrónico</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Clientes as $cliente)  
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nombre_completo }}</td>
                        <td>{{ $cliente->razon_social }}</td>
                        <td>{{ $cliente->rif }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        @if ($cliente->inactivo == 1)
                            <td>Acitvo</td>
                        @else
                            <td>Inactivo</td>
                        @endif
                        <td>
                            <a href="{{ route('cliente.show', $cliente) }}"
                                    class="btn btn-xs btn-default"
                                ><i class="fa fa-eye"></i></a>
                            <a href="{{ route('cliente.edit', $cliente) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('cliente.destroy', $cliente) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este cliente?')"
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