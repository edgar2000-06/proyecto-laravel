@extends('layout')

@section('header')
<h1>
    Tipos de clientes
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-bars"></i> Tipos de clientes</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de tipos de clientes</h3>
        @if (auth()->user()->is_admin)
            <a href="{{ route('tipcli.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear tipo de cliente
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
                    @if (auth()->user()->is_admin)
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($Tipos_clientes as $tipocliente)
                    <tr>
                        <td>{{ $tipocliente->id }}</td>
                        <td>{{ $tipocliente->nombre }}</td>
                        <td>
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('tipcli.edit', $tipocliente) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('tipcli.destroy', $tipocliente) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este tipo de cliente?')"
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