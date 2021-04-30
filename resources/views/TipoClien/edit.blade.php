@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class=><a href="{{ route('tipcli.index') }}"><i class="fa fa-bars"></i> Tipos de clentes</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tipo de cliente actual</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('tipcli.update', $tipocliente) }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="{{ old('nombre', $tipocliente->nombre) }}" id="nombre" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <button class="btn btn-primary btn-block">Crear tipo de cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection