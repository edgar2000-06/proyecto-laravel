@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class=><a href="{{ route('condicion-pago.index') }}"><i class="fa fa-credit-card"></i> Condiciones de pago</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nueva</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva condición de pago</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('condicion-pago.index') }}">
                        {{ csrf_field() }}

                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="dias">Días</label>
                            <input type="number" name="dias" value="{{ old('dias') }}" id="dias" class="form-control" placeholder="Ingresar días" required>
                        </div>
                        <button class="btn btn-primary btn-block">Crear condición de pago</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection