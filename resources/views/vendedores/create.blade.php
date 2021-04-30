@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class=><a href="{{ route('vendedor.index') }}"><i class="fa fa-black-tie"></i> Vendedores</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nuevo</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo vendedor</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('vendedor.index') }}">
                        {{ csrf_field() }}

                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cedula">C.I.</label>
                            <input type="number" name="cedula" value="{{ old('cedula') }}" id="cedula" class="form-control" placeholder="Ingresar cedula" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" value="{{ old('telefono') }}" id="telefono" class="form-control" placeholder="Ingresar número telefónico" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" value="{{ old('direccion') }}" id="direccion" class="form-control" placeholder="Ingresar dirección" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="porc-com-ven">Porcentage de comisión de venta</label>
                            <input type="number" name="porc-com-ven" value="{{ old('porc-com-ven') }}" id="porc-com-ven" class="form-control" placeholder="Ingresar porcentage de comisión de venta" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="porc-com-cob">Porcentage de comisión de cobro</label>
                            <input type="number" name="porc-com-cob" value="{{ old('porc-com-cob') }}" id="porc-com-cob" class="form-control" placeholder="Ingresar porcentage de comisión de cobro" required>
                        </div>
                        <div class="col-md-6"><br>
                        <button class="btn btn-primary btn-block">Crear vendedor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection