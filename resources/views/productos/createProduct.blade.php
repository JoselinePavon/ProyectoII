@extends('layouts.app')
@section('title', 'Producto')

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
                                <i class="fa-solid fa-desktop"></i> Registrar producto</h2>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-lg text-light">
                                    <input type="text" name="codigo" class="form-control" style="background-color: transparent; "value="{{old('codigo_producto')}}"
                                           placeholder="Codigo" >
                                </div>

                                <div class="col-lg">
                                    <input type="text" name="nombre_producto"class="form-control" style="background-color: transparent; value="{{old('nombre_producto')}}"
                                    placeholder="Nombre">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg text-light">
                                    <input type="text" name="precio" class="form-control" style="background-color: transparent; "value="{{old('precio_venta')}}"
                                           placeholder="Precio" >
                                </div>

                                <div class="col-lg">
                                    <input type="text" name="marca"class="form-control" style="background-color: transparent; value="{{old('marca')}}"
                                    placeholder="Marca">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg text-light">
                                <div class="custom-file col-md-12">
                                    <input type="file" name="foto" class="custom-file-input" id="customFile" style="background-color: transparent;value="{{old('foto_producto')}}"
                                        placeholder="Imagen"</imput>
                                    <label class="custom-file-label" for="customFile"style="background-color: transparent"> Subir foto del producto </label>
                                </div>
                                 </div>
                                </div>
                            </div>
                           <br>
                            <div class="row form-group">
                                <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-3" onclick="save()" style="background-color: #7F135FFF">
                                    <i class="fas fa-save"></i> Guardar Producto
                                </button>


                                <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('productos/read') }}" style="background-color: #ff1457"><i
                                        class="fas fa-ban"></i> Cancelar</a>
                            </div>




@endsection
