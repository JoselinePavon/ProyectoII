@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Produc
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 nunito sans-serif" >

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="background-color:#343635FF">
                        <h2  class="text-center" style="color: white" >
                            <i class="fa-solid fa-desktop" ></i> Registrar producto</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('producs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('produc.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
