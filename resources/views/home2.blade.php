@extends('layouts.app3')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container nunito sans-serif col-12 " style="background-color: transparent">
                    <div class="text-center">
                    <span id="card_title" class="mt-3 ml-3">
                        <h2>{{ __('📋 Ordenes asignadas') }}</h2>
                    </span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-10">
        <div class="table-responsive">
            <table class="table table-bordered table-ml text-center nunito sans-serif" style="background-color: white; font-size: 14px;">
                <thead class="thead-dark">
                <tr>
                    <th style="color: white">Cliente</th>
                    <th style="color: white">Direccion</th>
                    <th style="color: white">Referencias</th>
                    <th style="color: white">Telefono</th>
                    <th style="color: white">Servicio</th>
                    <th style="color: white">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->nombre_cliente }}</td>
                        <td>{{ $servicio->direccion_cliente }}</td>
                        <td>{{ $servicio->referencias }}</td>
                        <td>{{ $servicio->numero_telefono }}</td>
                        <td>{{ $servicio->tipo_servicio }}</td>
                        <td>
                            @if($servicio->estados_id == 1)
                                <p><i class="fas fa-times"></i> No Confirmado</p>
                            @elseif($servicio->estados_id == 2)
                                <p>Confirmado</p>
                            @else
                                <p>Eliminado</p>

                            @endif
                            <form method="POST" action="{{ route('toggle', $servicio->id) }}">
                                @csrf
                                @if($servicio->estados_id == 1)
                                    <button class="btn btn-sm btn-outline-warning" type="submit"><i class="fa fa-check-circle"></i> {{ __('Confirmar') }}</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
