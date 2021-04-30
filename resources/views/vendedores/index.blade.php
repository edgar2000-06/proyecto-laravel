@extends('layout')

@section('header')
<h1>
    Vendedores
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-black-tie"></i> Vendedores</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de vendedores</h3>
        @if (auth()->user()->is_admin)
            <a href="{{ route('vendedor.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear vendedor
            </a>
        @endif
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>C.I.</th>
                    <th>Correo electrónico</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>% comición de venta</th>
                    <th>% comición de cobro</th>
                    @if (auth()->user()->is_admin)
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($vendedores as $vendedor)
                    <tr>
                        <td>{{ $vendedor->id }}</td>
                        <td>{{ $vendedor->nombre_completo }}</td>
                        <td>{{ $vendedor->cedula }}</td>
                        <td>{{ $vendedor->email }}</td>
                        <td>{{ $vendedor->telefono }}</td>
                        <td>{{ $vendedor->direccion }}</td>
                        <td>{{ $vendedor->porceComisionVenta }}</td>
                        <td>{{ $vendedor->porceComisionCobro }}</td>
                        <td>
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('vendedor.edit', $vendedor) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('vendedor.destroy', $vendedor) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este vendedor?')"
                                ><i class="fa fa-times"></i></button>
                            </form>
                        @endif
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