@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('segmento.index') }}">Usuarios</a></li>
    <li class="active">Actualizar</li>
</ol><br>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Usuario actual</h3>
            </div>
            <div class="box-body">
                <form method="POST" action="{{ route('segmento.update', $segmento) }}">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('name', $segmento->nombre) }}" id="nombre" class="form-control" placeholder="Ingresar nombre" required>
                    </div>
                    <button class="btn btn-primary btn-block">Actualizar usuario</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
