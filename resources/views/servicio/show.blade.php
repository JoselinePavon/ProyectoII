@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? "{{ __('Show') Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $servicio->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Cliente:</strong>
                            {{ $servicio->direccion_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Referencias:</strong>
                            {{ $servicio->referencias }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefono:</strong>
                            {{ $servicio->numero_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Servicio:</strong>
                            {{ $servicio->tipo_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $servicio->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
