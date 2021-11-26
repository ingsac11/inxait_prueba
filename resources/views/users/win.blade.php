@extends('layout')

@section('title')
    <div class="container text-success text-center">
        <h4>Usuario ganador del sorteo</h4>
    </div>
@endsection

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acción</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td><a class="btn btn-info btn-sm" href="{{ route('show',$user->id) }}">Mostrar</a></td>
            </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-danger btn-sm" href="{{ route('home') }}"> Regresar</a>
            </div>
        </div>
    </div>
@endsection