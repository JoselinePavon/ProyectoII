@extends('layouts.app3')

@section('content')
    <header>
        <h2> 🖱️ Productos & Accesorios Tecnológicos ⌨️</h2>
        <div class="text-center">
            <a href="/home3" class="btn btn-warning">
                <i class="fas fa-arrow-left"></i> Regresar al inicio
            </a>
        </div>
    </header>


    <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center ">
            <div class="col-lg-12  ">
                <div class="row items">
                    @foreach($produc as $pro)
                        <div class="col-lg-4 ">
                            <div class="card " style="margin-bottom: 20px; height: auto; border: 2px solid #15648f;">
                                <img src="{{ asset('storage/' . $pro->foto_producto) }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="Foto">
                                <div class="card-body items product-card">
                                    <a href=""><h6 class="card-title">{{ $pro->nombre_producto }}</h6></a>
                                    <p>Q. {{ $pro->precio_venta }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre_producto}}" id="nombre_producto" name="nombre_producto">
                                        <input type="hidden" value="{{ $pro->precio_venta }}" id="precio_venta" name="precio_venta">
                                        <input type="hidden" value="{{ $pro->foto_producto }}" id="foto_producto" name="foto_producto">
                                        <input type="hidden" value="{{ $pro->categoria_id }}" id="categoria_id" name="categoria_id">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row text-center">
                                                <button class="btn btn-outline-info btn-sm " class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&family=Titillium+Web:wght@200;300;400;600;700&display=swap');
            *{
                margin: 0;
                padding:0;
                font-family: 'nunito' sans-serif;
            }
            header{
                background: url(https://img.freepik.com/fotos-premium/muestra-portatiles-escaparate-detras-cristal-sobre-fondo-borroso_475689-1419.jpg?size=626&ext=jpg&ga=GA1.1.1016474677.1696982400&semt=ais);
                background-size: cover;
                background-position:center;
                height: 250px;
            }
            header h2{
                text-align: center;
                font-size: 50px;
                /* background-color: #000; */
                color: #fff;
                padding: 50px 0;
            }
            .product-card {
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;

            }

            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 12px #3a3b45;
            }

            .card-footer {
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px;
            }

        </style>
    </div>
@endsection
