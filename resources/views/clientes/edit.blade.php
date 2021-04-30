@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('cliente.index') }}"><i class="fa fa-users"></i> Clientes</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cliente Actual (N° {{$cliente->id}})</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('cliente.update', $cliente) }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        <div class="form-group col-md-4">
                            <label for="nombre_completo">Nombre</label>
                            <input type="text" name="nombre_completo" value="{{ old('nombre_completo', $cliente->nombre_completo) }}" id="nombre_completo" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="razon_social">Razón social</label>
                            <input type="text" name="razon_social" value="{{ old('razon_social', $cliente->razon_social) }}" id="razon_social" class="form-control" placeholder="Ingresar razón social" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rif">Rif</label>
                            <input type="text" name="rif" value="{{ old('rif', $cliente->rif) }}" id="rif" class="form-control" placeholder="Ingresar rif" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="direccion_fiscal">Dirección fiscal</label>
                            <input type="text" name="direccion_fiscal" value="{{ old('direccion_fiscal', $cliente->direccion_fiscal) }}" id="direccion_fiscal" class="form-control" placeholder="Ingresar dirección fiscal" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="direccion_entrega">dirección de entrega</label>
                            <input type="text" name="direccion_entrega" value="{{ old('direccion_entrega', $cliente->direccion_entrega) }}" id="direccion_entrega" class="form-control" placeholder="Ingresar dirección de entrega" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="{{ old('email', $cliente->email) }}" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" id="telefono" class="form-control" placeholder="Ingresar número telefónico" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="porc_dec_global">Porcentaje de descuento global</label>
                            <input type="numb" name="porc_dec_global" value="{{ old('porc_dec_global', $cliente->porc_dec_global) }}" id="porc_dec_global" class="form-control" placeholder="Ingresar porcentaje de descuento global" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_zona">Zona</label>
                                <select name="id_zona" id="id_zona" class="form-control id_zona select2">
                                    @foreach ($Zonas as $zona)
                                        <option value="{{ $zona['id'] }}">{{ $zona['nombre'] }}</option>
                                    @if ($cliente->id_zona === $zona->id)  
                                    <option value="{{ $zona['id'] }}" selected>{{ $zona['nombre'] }}</option>
                                    @endif
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_tipo_cliente">Tipo de cliente</label>
                            <select name="id_tipo_cliente" id="id_tipo_cliente" class="form-control">
                                @foreach ($Tipos_clientes as $tipo_cliente)
                                    <option value="{{ $tipo_cliente['id'] }}">{{ $tipo_cliente['nombre'] }}</option>
                                @if ($cliente->id_tipo_cliente === $tipo_cliente->id)  
                                <option value="{{ $tipo_cliente['id'] }}" selected>{{ $tipo_cliente['nombre'] }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_segmento">Segmento</label>
                            <select name="id_segmento" id="id_segmento" class="form-control">
                                    @foreach ($Segmentos as $segmento)
                                        <option value="{{ $segmento['id'] }}">{{ $segmento['nombre'] }}</option>
                                    @if ($cliente->id_segmento === $segmento->id)  
                                    <option value="{{ $segmento['id'] }}" selected>{{ $segmento['nombre'] }}</option>
                                    @endif
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_vendedor">Vendedor</label>
                                <select name="id_vendedor" id="id_vendedor" class="form-control">
                                    @foreach ($Vendedores as $vendedor)
                                        <option value="{{ $vendedor['id'] }}">{{ $vendedor['nombre_completo'] }}</option>
                                    @if ($cliente->id_vendedor === $vendedor->id)
                                        <option value="{{ $vendedor['id'] }}" selected>{{ $vendedor['nombre_completo'] }}</option>
                                    @endif
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_condicionDePago">Condición de pago</label>
                                <select name="id_condicionDePago" id="id_condicionDePago" class="form-control">
                                @foreach ($Condiciones_de_pagos as $condicion)
                                    <option value="{{ $condicion['id'] }}">{{ $condicion['nombre'] }}</option>
                                @if ($cliente->id_condicionDePago === $condicion->id)  
                                    <option value="{{ $condicion['id'] }}" selected>{{ $condicion['nombre'] }}</option>
                                @endif
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inactivo" class="NombreDeCampo">Activo</label><br>
                            @if ($cliente->inactivo == 1)
                                <input type="hidden" name="inactivo" value="0">
                                <input type="checkbox" name="inactivo" id="inactivo" value="1" checked>
                            @else
                                <input type="hidden" name="inactivo" value="0">
                                <input type="checkbox" name="inactivo" id="inactivo" value="1">
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label for="agente_retencion" class="NombreDeCampo">Agente de retención</label><br>
                            @if ($cliente->agente_retencion == 1)
                                <input type="hidden" name="agente_retencion" value="0">
                                <input type="checkbox" name="agente_retencion" id="agente_retencion" value="1" checked>
                            @else
                                <input type="hidden" name="agente_retencion" value="0">
                                <input type="checkbox" name="agente_retencion" id="agente_retencion" value="1">
                            @endif
                        </div>
                        <div class="col-md-4"><br>
                            <button class="btn btn-primary btn-block">Actualizar clientes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection