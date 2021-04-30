@extends('layout')

@section('header')
<h1>
    Condidiones de pago
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-credit-card"></i> Condidiones de pago</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de condidiones de pago</h3>
        @if (auth()->user()->is_admin)
            <a href="{{ route('condicion-pago.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear condidión de pago
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
                    <th>Días</th>
                    @if (auth()->user()->is_admin)
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($Condiciones_de_pagos as $condicion)
                    <tr>
                        <th>{{ $condicion->id }}</th>
                        <td>{{ $condicion->nombre }}</td>
                        <td>{{ $condicion->dias }}</td>
                        <td>
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('condicion-pago.edit', $condicion) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('condicion-pago.destroy', $condicion) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar esta condición de pago?')"
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