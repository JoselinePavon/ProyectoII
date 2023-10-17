@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container nunito sans-serif col-12" style="background-color: transparent">

                    <div style="display: flex; justify-content: space-between; align-items: center;" >
                            <span id="card_title" class="mt-3 ml-3">
                               <h2> {{ __('🚚 Direccion de envio del producto') }}</h2>
                            </span>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <div class="card-body col-sm-14">
                    <div class="table-responsive">
                        <div class="col-sm-16">
                            <table class="table text-center nunito sans-serif " style="background-color:#ffffff;">
                                <thead class="thead" style="background-color: #2d2e33";>
                                    <tr>
                                        <th style="color: white">No</th>

										<th style="color: white">Nombre Cliente</th>
										<th style="color: white">Direccion Cliente</th>
										<th style="color: white">Numero Telefono</th>
                                        <th style="color: white">Eliminar registro</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $cliente->nombre_cliente }}</td>
											<td>{{ $cliente->direccion_cliente }}</td>
											<td>{{ $cliente->numero_telefono }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="background-color: #ff1457" ><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
