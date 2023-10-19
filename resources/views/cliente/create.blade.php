@extends('layouts.app3')

@section('template_title')
    {{ __('Create') }} Cliente
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-10 mt-8 ml-8 nunito sans-serif text-left mx-auto"  style="margin-top: 20px;">

                @includeif('partials.errors')

                <div class="card card-default" >
                    <div class="card-header" style="background-color:#9ecbe6" >
                        <h2  class="text-center" style="color: white" >
                            <span class="card-title">{{ __('') }} Formulario de pago</span></h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
