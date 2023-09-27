@extends('layouts.app')

@section('title', 'Tecnico')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-8">
                <h1 class="text-left nunito sans-serif mt-8" style="color: #7F135FFF">🧑‍💻Tecnicos</h1><br>

                <!--apartado de filtrado-->
                    <div class="d-flex justify-content-between">
                        <form class="form-inline" role="search">
                            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search" >
                            <button class="btn btn-outline-light my-2 my-sm-0 " type="submit" style="background-color:#00002EFF"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>

                        <!--boton de agregar un tecnico-->
                        <a href="{{ route('createTechnical') }}" class="btn btn-outline-light mb-2" style="font-size: 15px; background-color: #7F135FFF">
                            <i class="fa-solid fa-user-plus"></i> Agregar un técnico
                        </a>

                    </div>

                </form>
                <br>
                <table class="table table-dark table-bordered table-hover text-center nunito sans-serif">
                    <thead style="background-color: #343635FF">
                    <tr>
                        <th style="color: white">Nombre</th>
                        <th style="color: white">Apellido</th>
                        <th style="color: white">Usuario</th>
                        <th style="color: white">Contraseña</th>
                        <th style="color: white">Acciones</th>

                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
@endsection

