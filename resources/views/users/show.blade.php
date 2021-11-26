@extends('layout')

@section('title')
    <div class="container text-primary text-center">
        <hr>
        <h4>Usuario: {{$user->name}} {{$user->lastname}}</h4>
        <hr>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Regresar</a>
            </div>
        </div>
    </div>
<hr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $user->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                {{ $user->lastname }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de documento:</strong>
                {{ $user->cedula }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departamento:</strong>
                {{ $user->departamento->nombre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ciudad:</strong>
                {{ $user->municipio->nombre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de contacto:</strong>
                {{ $user->celular }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo electronico:</strong>
                {{ $user->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha/Hora de registro:</strong>
                {{ $user->created_at }}
            </div>
        </div>
    </div>
@endsection