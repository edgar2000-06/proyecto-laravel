@extends('layout')

@section('header')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><a href="{{ route('contacto.index') }}"><i class="fa fa-users"></i> Contactos</a></li>
    <li class="active"><i class="fa fa-pencil"></i> Editar</li>
</ol><br>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Contacto Actual</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('contacto.update', $contacto) }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}
                        
                            <div class="form-group col-md-6">
                                <label for="nombre_completo">Nombre</label>
                                <input type="text" name="nombre_completo" value="{{ old('nombre_completo', $contacto->nombre_completo) }}" id="nombre_completo" class="form-control" placeholder="Ingresar nombre" required autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefono">Telefono</label>
                                <input type="tel" name="telefono" value="{{ old('telefono', $contacto->telefono) }}" id="telefono" class="form-control" placeholder="Ingresar número telefónico" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="celular">Celular</label>
                                <input type="tel" name="celular" value="{{ old('celular', $contacto->celular) }}" id="celular" class="form-control" placeholder="Ingresar número celular" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" value="{{ old('email', $contacto->email) }}" id="email" class="form-control" placeholder="Ingresar correo electrónico" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cargo">Cargo</label>
                                <input type="text" name="cargo" value="{{ old('cargo', $contacto->cargo) }}" id="cargo" class="form-control" placeholder="Ingresar Cargo" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_cliente">Cliente</label>
                                <select name="id_cliente" id="id_cliente" class="form-control">
                                    @foreach ($Clientes as $cliente)
                                    @if ($contacto->id_cliente === $cliente->id)
                                        <option value="{{ $cliente['id'] }}" selected>{{ $cliente['nombre_completo'] }}</option>
                                    @endif
                                        <option value="{{ $cliente['id'] }}">{{ $cliente['nombre_completo'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-primary btn-block">Actualizar contacto</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection