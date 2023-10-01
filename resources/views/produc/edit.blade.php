@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Produc
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="background-color:#343635FF">
                        <h2  class="text-center" style="color: white">
                        <span  class="card-title">{{ __('Editar') }} Producto </span></h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('producs.update', $produc->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('produc.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
