@extends('layouts.app')
@section('title', 'Tecnico')

@section('content')
    <div class="container">
        <div class=" row justify-content-center">
            <div class="col-md-7 mt-5 ml-5">

                <!-- Mensaje Flash -->
                @if(session('Guardado'))
                    <div class="alert alert-success">
                        {{ session('Guardado') }}
                    </div>
                @endif

                <!-- Validacion de Errores -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card" style="background-color: transparent;border-radius: 10px; border-color: #343635FF">
                    <form action="" method="POST" >
                        @csrf

                        <div class=" card-header text-center" style="background-color: #343635FF; border-radius: 10px;border-color: #7F135FFF">
                            <h2 style="color: #FEFBE7">
                                <i class="fas fa-user-check"></i> Registrar un tecnico</h2>
                        </div>
                        <div class="card-body" >
                            <div class="row">

                                <div class="col-lg text-light">
                                    <input type="text" name="nombre" class="form-control" style="background-color: transparent; "value="{{old('nombre_usuario')}}"
                                           placeholder="Nombre" name="nombre_tecnico">
                                </div>

                                <div class="col-lg">
                                    <input type="text" name="apellido"class="form-control" style="background-color: transparent;
                                           value="{{old('apellico_usuario')}}" placeholder="Apellido">
                                </div>

                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" name="usuario" class="form-control" style="background-color: transparent"
                                           value="{{old('usuario')}}" placeholder="Usuario">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg position-relative">
                                    <input type="password" name="contraseña" id="contraseña" class="form-control" style="background-color: transparent" value="{{old('contraseña')}}" placeholder="Contraseña">
                                    <div class="form-group text-right position-absolute" style="right: 15px; top: 0px;">
                                        <button type="button" id="mostrarOcultar" class="btn btn-dark">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>



                                <br>
                                <div class="row form-group">
                                    <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" onclick="save()" style="background-color: #7F135FFF">
                                        <i class="fas fa-save"></i> Guardar Registro
                                    </button>


                                    <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('/read/tecnico') }}" style="background-color: #ff1457"><i
                                            class="fas fa-ban"></i> Cancelar</a>
                                </div>

                            <script>
                                const contraseñaInput = document.getElementById("contraseña");
                                const mostrarOcultarBoton = document.getElementById("mostrarOcultar");

                                mostrarOcultarBoton.addEventListener("click", function() {
                                    if (contraseñaInput.type === "password") {
                                        contraseñaInput.type = "text";
                                    } else {
                                        contraseñaInput.type = "password";
                                    }
                                });
                            </script>
@endsection

