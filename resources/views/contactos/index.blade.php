@extends('layout')

@section('header')
<h1>
    Contactos
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-users"></i> Contactos</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de contactos</h3>
            <a href="{{ route('contacto.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear contacto
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Correo electrónico</th>
                    <th>Cargo</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Contactos as $contacto)  
                    <tr>
                        <td>{{ $contacto->id }}</td>
                        <td>{{ $contacto->nombre_completo }}</td>
                        <td>{{ $contacto->telefono }}</td>
                        <td>{{ $contacto->celular }}</td>
                        <td>{{ $contacto->email }}</td>
                        <td>{{ $contacto->cargo }}</td>
                        @foreach ($Clientes as $cliente)
                            @if ($contacto->id_cliente === $cliente->id)  
                                <td>{{ $cliente->nombre_completo }}</td>
                            @endif
                        @endforeach
                        <td>
                            <a href="{{ route('contacto.edit', $contacto) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('contacto.destroy', $contacto) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este contacto?')"
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