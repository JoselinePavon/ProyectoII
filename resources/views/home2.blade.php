@extends('layouts.app3')
@section('content')


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

    <div class="card-body col-sm-14">
                        <div class="table-responsive">
                            <div class="col-sm-16">
                                <table class="table text-center nunito sans-serif "style="background-color: white" >
                                    <thead class="thead" style="background-color: #343635FF" >
                                    <tr>

                                        <th style="color: white">Codigo de asignación</th>
                                        <th style="color: white">Nombre del cliente</th>
                                        <th style="color: white">Direccion</th>
                                        <th style="color: white">Referencias</th>
                                        <th style="color: white">Telefono</th>
                                        <th style="color: white">Servicio</th>
                                        <th style="color: white" colspan="2">Confirmar</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
