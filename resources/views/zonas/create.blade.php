@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class=><a href="{{ route('zona.index') }}"><i class="fa fa-map"></i> Zonas</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nueva</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nueva zona</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('zona.index') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <button class="btn btn-primary btn-block">Crear zona</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection