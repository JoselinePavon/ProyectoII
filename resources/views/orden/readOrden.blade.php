@extends('layouts.app')
@section('title', 'Orden de servicio')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-8">
                <h1 class="text-left nunito sans-serif mt-8" style="color: #7F135FFF"<span style='font-size:100px;'>&#128221;</span>Ordenes de servicio</h1>
                <br>
                </form>
                <br>
                <table class="table table-dark table-bordered table-hover text-center nunito sans-serif">
                    <thead style="background-color: #343635FF">
                    <tr>
                        <th style="color: white">Nombre del cliente</th>
                        <th style="color: white">Dirección</th>
                        <th style="color: white">Referencias</th>
                        <th style="color: white">Numero de telefono</th>
                        <th style="color: white">Servicio</th>
                        <th style="color: white">Asignar</th>

                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>


@endsection
