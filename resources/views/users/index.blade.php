@extends('layout')

@section('title')
    <div class="container text-success text-center">
        <hr>
        <h4>Usuarios registrados</h4>
        <hr>
    </div>
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acción</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td><a class="btn btn-info btn-sm" href="{{ route('show', $user->id) }}">Mostrar</a></td>
            </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-warning btn-sm" href="{{ route('win') }}"> Generar Ganador</a>
            </div>

            <div class="pull-left">
                <a class="btn btn-success btn-sm" href="{{ route('downloadexcel') }}"> Descargar EXCEL</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                {{ $users->links() }}
            </div> 
            
            <div class="pull-left">
                <a class="btn btn-danger btn-sm" href="{{ route('home') }}"> Regresar</a>
            </div>
        </div>
    </div>
@endsection