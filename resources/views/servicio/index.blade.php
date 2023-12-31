@extends('layouts.app')

@section('template_title')
    Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container nunito sans-serif col-12" style="background-color: transparent">

                        <div style="display: flex; justify-content: space-between; align-items: center;" >
                            <span id="card_title" class="mt-3 ml-3">
                               <h2> {{ __('📋Solicitudes de servicio') }}</h2>
                            </span>
                        </div>
                </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                <div class="card-body">
                    <div class="col-sm-16">
                        <table class="table text-center nunito sans-serif" style="background-color: white">
                            <thead class="thead" style="background-color: #2d2e33">
                            <tr>
                                <th style="color: white; width: 20px;">No</th>
                                <th style="color: white; width: 150px;">Cliente</th>
                                <th style="color: white; width: 200px;">Direccion</th>
                                <th style="color: white; width: 200px;">Referencias</th>
                                <th style="color: white; width: 100px;">Telefono</th>
                                <th style="color: white; width: 150px;">Tipo Servicio</th>
                                <th style="color: white; width: 150px;">Asignar tecnico</th>
                            </tr>
                            </thead>
                            <tbody>
            @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $servicio->nombre_cliente }}</td>
											<td>{{ $servicio->direccion_cliente }}</td>
											<td>{{ $servicio->referencias }}</td>
											<td>{{ $servicio->numero_telefono }}</td>
											<td>{{ $servicio->tipo_servicio }}</td>


                                            <td>
                                                @if($servicio->estados_id == 1)
                                                    <a class="btn btn-outline-warning" href="{{ route('asignar',$servicio->id) }}"><i class="fas fa-tasks"></i> {{ __('Asignar') }}</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                            {{$servicios->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
