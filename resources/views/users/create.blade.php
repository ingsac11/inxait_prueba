@extends('layout')

@section('title')
    <div class="container text-success text-center">
        <hr>
        <h4>Registrate para participar</h4>
        <hr>
    </div>
@endsection

@section('content')
    @csrf
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="lastname" class="form-control" placeholder="Apellido">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de documento:</strong>
                    <input type="number" name="cedula" class="form-control" placeholder="Numero de cedula">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departamento:</strong>
                    <select name="departamento_id" id="departamento_id" class="form-control">
                        @foreach($departamentos as $departamento)
                            <option value={{$departamento->id}}>{{$departamento->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    <select name="municipio_id" id="municipio_id" class="form-control">
                        @foreach($municipios as $municipio)
                            <option value={{$municipio->id}}>{{$municipio->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de Contacto:</strong>
                    <input type="number" name="celular" class="form-control" placeholder="Celular-Telefono">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo electronico:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales. Haga click aqui</strong>
                    <br>
                    <select name="autorizar" id="autorizar">
                        <option id= "1" value="1">Si</option>
                        <option id= "2" value="2" selected='selected'>No</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <button type="submit" value="boton" name="guardar" id="guardar" class="btn btn-primary btn-sm" disabled>Guardar datos</button>
                </div>
        
                <div class="pull-left">
                    <a class="btn btn-danger btn-sm" href="{{ route('index') }}">Regresar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        console.log('carga')
        $('#departamento_id').on('change',function(){
        
            let url = "{{route('obtener_ciudades',':id')}}"
            url = url.replace(':id',$(this).val())
            $.ajax({
                method: "GET",
                url: url
                }).done(function(data) {
                    console.log(data)
                    $('#municipio_id').empty()
                    $.each(data.departamentos,function(key,value){
                        console.log(value)
                        $('#municipio_id').append('<option value="'+value.id +'">'+ value.nombre +'</option>')
                    })
               
                }).fail(function() {
                    alert("Algo salió mal");
                })
                
        })
        $('#autorizar').on('change',function(){
            if($(this).val() == 1){
                $('#guardar').attr('disabled',false)
            }else{
                $('#guardar').attr('disabled',true)
            }
        })
    })
    
</script>
@endsection