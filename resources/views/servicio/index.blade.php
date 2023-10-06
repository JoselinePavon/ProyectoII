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
                            <table class="table text-center nunito sans-serif "style="background-color: white" >
                                <thead class="thead" style="background-color: #343635FF" >
                                    <tr>
                                        <th style="color: white">No</th>

										<th style="color: white">Nombre Cliente</th>
										<th style="color: white">Direccion Cliente</th>
										<th style="color: white">Referencias</th>
										<th style="color: white">Numero Telefono</th>
										<th style="color: white">Tipo Servicio</th>
										<th style="color: white">Asignar tecnico</th>

                                        <th></th>
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
											<td>{{ $servicio->users_id }}</td>

                                            <td>
                                                <form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('servicios.show',$servicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('servicios.edit',$servicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $servicios->links() !!}
            </div>
        </div>
    </div>
@endsection
