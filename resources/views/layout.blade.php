<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>INXAIT-PRUEBA</title>

        <style>
            .active{
                color: red;
                font-weight: bold;
            }
        </style>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    
    <body>
        <nav class="container">
            <a class="nav-link, {{request()->routeIs('home')? 'active': ""}}" href="{{route('home')}}">{{__('Pagina Principal')}}</a>

            <a class="nav-link, {{request()->routeIs('index')? 'active': ""}}" href="{{route('index')}}">{{__('Usuarios registrados')}}</a>

            <a class="nav-link, {{request()->routeIs('win')? 'active': ""}}" href="{{route('win')}}">{{__('Ganador')}}</a>
        </nav>

        <main>
            <div class="container">
                <h2 class=" bg-success text-white text-center">Automoviles ABC</h2>
                @yield('title')
            </div>
            <div class="container">
                @yield('content')
            </div>
        </main>    
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    @yield('js')
</html>