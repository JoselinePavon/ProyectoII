@extends('layouts.app3')

@section('content')
    <header>
        <h2> 🖱️ Productos & Accesorios Tecnológicos ⌨️</h2>
    </header>
    @php(\Cart::session(request()->user()->id))
    <div class="container" style="margin-top: 30px">
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity() > 0)
                    <h4 style="color: #0C6EA9FF">{{ \Cart::getTotalQuantity() }} Producto(s) en el carrito</h4><br>
                @else
                    <h4>No. Product(s) En su Carro</h4><br>
                    <a href="/shop" class="btn btn-outline-success">Continue en la tienda</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{ asset('storage/' . $item->associatedModel->foto_producto) }}" class="img-thumbnail" width="500" height="500">
                        </div>

                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->categoria_id }}">{{ $item->associatedModel->nombre_producto }}</a></b>
                                <b>Precio: </b>Q. {{ $item->associatedModel->precio_venta }}<br>
                                <b>Sub Total: </b>Q. {{ \Cart::get($item->id)->getPriceSum() }}<br>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-2">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}" id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-outline-dark btn-sm" style="width: 35px; margin-right: 25px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>

                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-danger btn-sm" style="width: 35px; margin-top: -90px; margin-left: 115px; background-color: #ff1457; color:white"><i class="fa fa-trash"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach

                @if(count($cartCollection) > 0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-outline-danger btn-md">Borrar Carrito</button>
                    </form>
                @endif
            </div>
            @if(count($cartCollection) > 0)

                <div class="row" style="background-color: transparent;">
                    <div class="col-lg">
                        <div class="card" style="background-color: transparent;">
                            <ul class="list-group list-group-flush" style="background-color: transparent;">
                                <li class="list-group-item"><b>Total: </b>Q. {{ $total }}</li>
                            </ul>
                        </div>
                        <br>
                        <a href="/shop" class="btn btn-outline-info">
                            <i class="fas fa-store"></i> Continue en la tienda
                        </a>
                        <a href="{{ route('clientes.create') }}" class="btn btn-outline-success">
                            <i class="fas fa-shopping-cart"></i> Adquirir producto
                        </a>
                    </div>
                </div>


            @endif

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&family=Titillium+Web:wght@200;300;400;600;700&display=swap');
                * {
                    margin: 0;
                    padding: 0;
                    font-family: 'nunito' sans-serif;
                }

                header {
                    background: url(https://img.freepik.com/fotos-premium/muestra-portatiles-escaparate-detras-cristal-sobre-fondo-borroso_475689-1419.jpg?size=626&ext=jpg&ga=GA1.1.1016474677.1696982400&semt=ais);
                    background-size: cover;
                    background-position: center;
                    height: 250px;
                }

                header h2 {
                    text-align: center;
                    font-size: 50px;
                    color: #fff;
                    padding: 50px 0;
                }
            </style>

        </div>
        <br><br>
    </div>
@endsection
