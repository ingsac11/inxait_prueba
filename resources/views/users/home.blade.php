@extends('layout')

@section('title')
    <div class="container text-success text-center">
        <hr>
        <h4>Bienvenidos</h4>
        <hr>
    </div>
@endsection

@section('content')
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti beatae aliquam vero tenetur recusandae, nisi sint omnis explicabo odio quis suscipit sunt soluta aut laboriosam dicta aspernatur veritatis. Quia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur rem perspiciatis sunt adipisci omnis consectetur libero repellendus sequi molestiae id. Totam nihil laboriosam harum molestias neque hic asperiores assumenda commodi.</p>
    <br>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non consequatur expedita cumque sed dolor dolorum ut nihil, unde architecto reprehenderit possimus cum praesentium dolores atque consequuntur repudiandae ea quod beatae.</p>
    <br>
    <p>Participa en el sorteo. Dale click al boton</p>
    <div class="container">
        <a class="btn btn-info" href="{{ route('create') }}"> Registrate</a>
    </div>
@endsection