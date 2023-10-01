@extends('layouts.app')

@section('template_title')
    {{ $produc->name ?? "{{ __('Show') Produc" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row nunito sans-serif">
            <div class="col-md-12 nunito sans-serif">
                <div class="card" style="background-color: transparent">
                    <div class="card-header" style="background-color: #343635FF"  >
                        <div class="float-left" >
                           <h2><span class="card-title" style="color: white">{{ __(' 💻 Caracteristicas del producto') }}</span> </h2>
                        </div>
                        <div class="float-right">
                            <i class="bi bi-arrow-return-left"></i>
                            <a class="btn btn-outline-light mb-2" style="background-color: #7F135FFF; color:lightgray"  href="{{ route('producs.index') }}"> {{ __(' ← Regresar') }} </a>
                        </div>
                    </div>

                    <div class="card-body nunito sans-serif">

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $produc->codigo_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $produc->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $produc->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $produc->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $produc->foto_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $produc->categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
