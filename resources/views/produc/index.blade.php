@extends('layouts.app')

@section('template_title')
    Productos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container nunito sans-serif col-12" style="background-color: transparent">

                        <div style="display: flex; justify-content: space-between; align-items: center; " >
                            <span id="card_title"  class="mt-3 ml-3">
                              <h2> {{ __('💻 Listado de productos') }}</h2>
                            </span>

                             <div class="float-right mt-3 mr-3">
                                <a href="{{ route('producs.create') }}" class="btn btn-outline-light mb-1" style="background-color: #9ecbe6; " data-placement="left">
                                    {{ __(' ➕ Agregar Producto') }}
                                </a>
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
                            <table class="table text-center nunito sans-serif "style="background-color: white" >
                                <thead class="thead" style="background-color: #343635FF" >
                                    <tr>

										<th style="color: white">Codigo</th>
										<th style="color: white">Nombre</th>
										<th style="color: white">Precio</th>
										<th style="color: white">Marca</th>
										<th style="color: white">Imagen</th>
										<th style="color: white">Categoria</th>
                                        <th style="color: white" colspan="2">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($producs as $produc)
                                        <tr>

											<td>{{ $produc->codigo_producto }}</td>
											<td>{{ $produc->nombre_producto }}</td>
											<td> Q.{{ $produc->precio_venta }}</td>
											<td>{{ $produc->marca }}</td>
                                            <td>
                                                @if($produc->foto_producto)
                                                    <img src="{{ asset('storage/' . $produc->foto_producto) }}" alt="Foto" width="100">
                                                @else
                                                    Sin imagen
                                                @endif
                                            </td>
                                            <td>{{ $produc->descripcion}}</td>
                                            <td class="col-2">
                                                <form action="{{ route('producs.destroy',$produc->id) }}" method="POST" class="">
                                                    <a class="btn btn-sm btn-primary " style="background-color:#9ecbe6" href="{{ route('producs.show',$produc->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    <a class="btn btn-sm btn-success"  style="background-color: #3cbcd0" href="{{ route('producs.edit',$produc->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="background-color: #ff1457" ><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                            </td>
                                            </td> </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                {{$producs->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
