@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('contacto.index') }}"><i class="fa fa-users"></i> Contactos</a></li>
    <li class="active"><i class="fa fa-plus"></i> Nuevo</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nuevo contacto</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('contacto.index') }}">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error}}</p><br>
                        @endforeach
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Ingresar nombre" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" value="{{ old('telefono') }}" id="telefono" class="form-control" placeholder="Ingresar número telefónico" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="celular">Celular</label>
                            <input type="tel" name="celular" value="{{ old('celular') }}" id="celular" class="form-control" placeholder="Ingresar número celular" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" value="{{ old('cargo') }}" id="cargo" class="form-control" placeholder="Ingresar Cargo" required>
                        </div>
                        <div class="form-group col-md-6 cliente">
                            <label for="cliente">Cliente</label>
                            <select name="cliente" id="cliente" class="form-control">
                                @foreach ($Clientes as $cliente)
                                    <option value="{{ $cliente['id'] }}">{{ $cliente['nombre_completo'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary btn-block">Crear contacto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $(document).ready(function() {
        $('#cliente').select2();
    });
</script>