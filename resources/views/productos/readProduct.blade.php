@extends('layouts.app')
@section('title', 'Producto')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-8">
                <h1 class="text-left nunito sans-serif mt-8" style="color: #7F135FFF">💻 Listado de productos</h1><br>

                <!--apartado de filtrado-->
                <div class="d-flex justify-content-between">
                    <form class="form-inline" role="search">
                        <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search" >
                        <button class="btn btn-outline-light my-2 my-sm-0 " type="submit" style="background-color:#00002EFF"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    <!--boton de agregar un producto-->
                    <a href="{{ route('createProduct') }}"class="btn btn-outline-light mb-2" style="font-size: 15px; background-color: #7F135FFF">
                        <i class="fa-solid fa-plus"></i> Agregar producto
                    </a>

                </div>

                </form>
                <br>
                <table class="table table-bordered table-hover text-center nunito sans-serif" style="background-color:#fafaef">
                    <thead style="background-color: #343635FF">
                    <tr>
                        <th style="color: white">Codigo</th>
                        <th style="color: white">Imagen</th>
                        <th style="color: white">Producto</th>
                        <th style="color: white">Marca</th>
                        <th style="color: white">Categoria</th>
                        <th style="color: white">Precio</th>
                        <th style="color: white">Acciones</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($producto as $productos)
                        <tr>

                            <td>{{$productos->codigo_producto}}</td>
                            <td>{{$productos->foto_producto}}</td>
                            <td>{{$productos->nombre_producto}}</td>
                            <td>{{$productos->marca}}</td>
                            <td>{{$productos->categoria}}</td>
                            <td>{{$productos->precio_venta}}</td>
                        </tr>



                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>

@endsection
