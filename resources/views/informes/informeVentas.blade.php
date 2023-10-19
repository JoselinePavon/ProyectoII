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
                               <h2> {{ __('🛒 Ventas') }}</h2>
                            </span>
                    </div>
                    <form action="{{ route('ventas.search') }}" method="GET">
                        <div class="form-group">
                            <div class="form-group d-flex">
                                <input type="date" class="form-control" id="fecha" name="fecha" style="width: 94%">
                                <button type="submit" class="btn btn-outline-dark ml-2">🔍</button>
                            </div>

                        </div>

                    </form>

                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <div class="card-body col-sm-14">
                    <div class="table-responsive">
                        <div class="col-sm-16">
                            <table class="table text-center nunito sans-serif " style="background-color:#ffffff;font-size: 14px;">
                                <thead class="thead" style="background-color: #2d2e33";>
                                <tr>
                                    <th style="color: white">No</th>
                                    <th style="color: white">Fecha</th>
                                    <th style="color: white">Producto</th>
                                    <th style="color: white">Total</th>
                                    <th style="color: white">Eliminar venta</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 0 @endphp <!-- Inicializa la variable $i -->

                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td> <!-- Incrementa $i para el número de fila -->
                                            <td>{{ $venta->fecha_venta }}</td>
                                            <td>{{ $venta->productos }}</td>
                                            <td>Q. {{ $venta->total }}.00</td>
                                            <td>
                                            <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="background-color: #ff1457">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
