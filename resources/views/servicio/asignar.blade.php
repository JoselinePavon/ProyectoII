@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Servicio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" >
                    <div class="card-header" style="background-color:#9ecbe6" >
                        <h2  class="text-center" style="color: white" >
                            <span class="card-title"> <i class="fa fa-arrow-right"></i> Asignar tecnico</span></h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignartecnico', $servicio->id) }}"  role="form" enctype="multipart/form-data">
                             @csrf
                            <div class="form-group">
                                <label for="users_id">Seleccionar Técnico:</label>
                                <select name="users_id" class="form-control">
                                    @foreach($tecnico as $item)
                                        <option value="{{$item->id}}" @if($item->id == $servicio->users_id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <br>
                            <div class="row text-center">
                                        <button id="Guardado" type="submit" class="btn btn-outline-light col-md-4 offset-2 mr-4" onclick="save()" style="background-color: #9ecbe6">
                                            <i class="fas fa-save"></i> Asignar tecnico
                                        </button>

                                        <a class="btn btn-outline-light btn-xs col-md-4" href=" {{ url('/servicios')}}" style="background-color: #ff1457"><i
                                                class="fas fa-ban"></i> Cancelar</a>
                                    </div>

                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
