@extends('layout')

@section('header')
<h1>
    Zonas
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-map"></i> Zonas</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de zonas</h3>
        @if (auth()->user()->is_admin)
            <a href="{{ route('zona.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear zona
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
                @foreach ($Zonas as $zona)
                    <tr>
                        <td>{{ $zona->id }}</td>
                        <td>{{ $zona->nombre }}</td>
                        <td>
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('zona.edit', $zona) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('zona.destroy', $zona) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar esta zona?')"
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