@extends('layouts.app3')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div class="dashboard">
    <a href=" {{ route('servicios.create') }}">
    <div class="option div-con-borde">
        <img src="https://www.manageengine.com/products/service-desk/itil/images/itil-service-catalog-guide.png">
        <p>Solicitud de servicio</p>
    </div>
    </a>
    <a href="{{ route('shop') }}">
    <div class=" option div-con-borde">
        <img src="https://blumbox.do/wp-content/uploads/2020/10/tienda-online.png" >
        <p>Comprar productos</p>
    </div>
    </a>
</div>

<style>
    .dashboard {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;

    }

    .div-con-borde {
        max-width: 500px;
        margin: auto;
        border: 1px solid #666;
        border-radius: 10px;
        padding: 20px;
        transition: .3s;
        box-shadow: 0 0 10px #666;
        scale: 1.05;
        justify-content: space-between;
        contain: paint;
        display: block;
        font-weight: bold;
        text-align: center;


    }

    .option {
        text-align: center;
        margin: 50px;

    }

    .option img {
        width: 300px;
        height: 300px;
        object-fit: cover;

    }

    .option p {
        margin-top: 10px;
        font-weight: bold;
    }

    /* Estilos para pantallas más pequeñas */
    @media (max-width: 768px) {
        .dashboard {
            flex-direction: column;
        }

        .option {
            margin: 10px; /* Ajusta el margen para pantallas más pequeñas */
        }
    }

</style>


</body>
</html>

@endsection
