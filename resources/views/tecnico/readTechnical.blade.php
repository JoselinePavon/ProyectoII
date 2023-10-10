@extends('layouts.app')

@section('title', 'Tecnico')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container nunito sans-serif col-12" style="background-color: transparent">

                    <div style="display: flex; justify-content: space-between; align-items: center; ">
                            <span id="card_title" class="mt-3 ml-3">
                              <h2> {{ __('👨‍🔧 Lista de tecnicos') }}</h2>
                            </span>

                        <div class="float-right mt-3 mr-3">
                            <a href="{{ route('createTechnical') }}" class="btn btn-outline-light mb-1"
                               style="background-color: #9ecbe6; " data-placement="left">
                                {{ __(' ➕ Registrar Tecnico') }}
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
                                <table class="table text-center nunito sans-serif " style="background-color: white">
                                    <thead style="background-color: #343635FF">
                                    <tr>
                                        <th style="color: white">Usuario</th>
                                        <th style="color: white">Nombre</th>
                                        <th style="color: white">Apellido</th>
                                        <th style="color: white">Correo electronico</th>
                                        <th style="color: white">Eliminar Usuario</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($user as $users)
                                        <tr>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->nombre}}</td>
                                            <td>{{$users->apellido}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>
                                                <form action="{{ route('destroy', ['id' => $users->id]) }}"
                                                      method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            style="background-color: #ff1457">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                {{$user->links()}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection

