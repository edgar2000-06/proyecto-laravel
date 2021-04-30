@extends('layout')

@section('header')
<h1>
    Segmentos
    <small>Listado</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Segmentos</li>
</ol><br>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de segmentos</h3>
        @if (auth()->user()->is_admin)
            <a href="{{ route('segmento.create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i>  Crear segmento
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
                @foreach ($Segmentos as $segmento)
                    <tr>
                        <td>{{ $segmento->id }}</td>
                        <td>{{ $segmento->nombre }}</td>
                        <td>
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('segmento.edit', $segmento) }}"
                                class="btn btn-xs btn-info"
                            ><i class="fa fa-pencil"></i></a>
                            <form method="POST"
                                action="{{ route('segmento.destroy', $segmento) }}"
                                style="display: inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este segmento?')"
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