@extends('layout')

@section('header')
<h1>
    Clientes
    <small>Ver</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('cliente.index') }}"><i class="fa fa-users"></i>Clientes</a></li>
    <li class="active"><i class="fa fa-eye"></i> Ver</li>
</ol>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Detalles del cliente</h3>
            <a href="{{ route('cliente.create') }}" class="btn btn-xs btn-danger pull-right">
                <i class="fa fa-times"></i>  Eliminar cliente
            </a>
            <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-xs btn-primary pull-right">
                <i class="fa fa-pencil"></i>  Editar cliente
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Razón social</th>
                    <th>Rif</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cliente->nombre_completo }}</td>
                    <td>{{ $cliente->razon_social }}</td>
                    <td>{{ $cliente->rif }}</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Dirección fiscal</th>
                    <th>Dirección de entrega</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cliente->direccion_fiscal }}</td>
                    <td>{{ $cliente->direccion_entrega }}</td>
                    <td>{{ $cliente->email }}</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Agente de retencion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cliente->telefono }}</td>
                    @if ($cliente->inactivo == 1)
                        <td>Acitvo</td>
                    @else
                        <td>Inactivo</td>
                    @endif
                    @if ($cliente->agente_retencion == 1)
                        <td>Acitvo</td>
                    @else
                        <td>Inactivo</td>
                    @endif
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>% descuento global</th>
                    <th>Zona</th>
                    <th>Tipo de cliente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cliente->porc_dec_global }}</td>
                    @foreach ($Zonas as $zona)
                        @if ($cliente->id_zona === $zona->id)  
                            <td>{{ $zona->nombre }}</td>
                        @endif
                    @endforeach
                    @foreach ($Tipos_clientes as $tipo_cliente)
                        @if ($cliente->id_tipo_cliente === $tipo_cliente->id)  
                            <td>{{ $tipo_cliente->nombre }}</td>
                        @endif
                    @endforeach
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Segmento</th>
                    <th>Vendedor</th>
                    <th>Condición de pago</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($Segmentos as $segmento)
                        @if ($cliente->id_segmento === $segmento->id)  
                            <td>{{ $segmento->nombre }}</td>
                        @endif
                    @endforeach
                    @foreach ($Vendedores as $vendedor)
                        @if ($cliente->id_vendedor === $vendedor->id)  
                            <td>{{ $vendedor->nombre_completo }}</td>
                        @endif
                    @endforeach
                    @foreach ($Condiciones_de_pagos as $condicion)
                        @if ($cliente->id_condicionDePago === $condicion->id)  
                            <td>{{ $condicion->nombre }}</td>
                        @endif
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@stop