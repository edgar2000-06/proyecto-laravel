@extends('layout')

@section('header')
<h1>
    {{auth()->user()->name}}
    <small>Perfil</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><i class="fa fa-user"></i> Perfil</li>
</ol>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Detalles de {{auth()->user()->name}}</h3>
            <a href="{{ route('perfil.edit') }}" class="btn btn-xs btn-primary pull-right">
                <i class="fa fa-pencil"></i>  Editar perfil
            </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="users-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{auth()->user()->name}}</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{auth()->user()->email}}</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if (auth()->user()->is_admin == 1)
                        <td>Administrador</td>
                    @else
                        <td>No administrador</td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@stop