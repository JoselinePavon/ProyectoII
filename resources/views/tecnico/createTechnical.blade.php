@extends('layouts.app')
@section('title', 'Tecnico')

@section('content')
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
                <style>
                    .signup-form {
                        background-color: white;
                    }
                </style>
                <section class="content container-fluid-center" >
                    <div class="row">
                        <div class="col-md-8 mt-6 ml-8 nunito sans-serif text-center mx-auto" >
                            <div class="card-header" style="background-color:#9ecbe6">
                                <h2 class="text-center" style="color: white">
                                    <i class="fas fa-user-cog"></i> Registrar Tecnico</h2>
                            </div>
                            <form class="signup-form" action="{{route('saveTechnical')}}" method="POST">
                                @csrf
                             <div class="card-body">
                            <div class="row">

                                <div class="col-lg text-light">
                                    <input type="text" name="name" id="name"class="form-control"
                                           placeholder="Usuario">
                                </div>
                                <div class="col-lg">
                                    <input type="text" name="nombre"  id="nombre"class="form-control"
                                           placeholder="Nombre">
                                </div>

                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" name="apellido" id="apellido" class="form-control"
                                            placeholder="Apellido">
                                </div>
                                <div class="col-lg">
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="Email">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg position-relative">
                                    <input type="password" name="password" id="password" class="form-control"   placeholder="Contraseña">
                                    <div class="form-group text-right position-absolute" style="right: 15px; top: 0px;">
                                        <button type="button" id="mostrarOcultar" class="btn btn-dark">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    <br>
                            <input type="hidden" name="rol_usuario_id"  value="2">
                            <div class="row form-group">
                                <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" href="{{ url('/read/tecnico') }}" onclick="save()" style="background-color: #9ecbe6">
                                    <i class="fas fa-save"></i> Guardar Registro
                                </button>


                                <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('/read/tecnico') }}" style="background-color: #ff1457"><i
                                        class="fas fa-ban"></i> Cancelar</a>
                            </div>

                                 <script>
                                     const mostrarOcultarBtn = document.getElementById('mostrarOcultar');
                                     const passwordInput = document.getElementById('password');

                                     mostrarOcultarBtn.addEventListener('click', function() {
                                         if (passwordInput.type === 'password') {
                                             passwordInput.type = 'text';
                                         } else {
                                             passwordInput.type = 'password';
                                         }
                                     });
                                 </script>
                        </div>
                    </form>
                </div>
            </div>
@endsection

