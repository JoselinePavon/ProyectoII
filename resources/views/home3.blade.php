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
        <img src="https://www.manageengine.com/products/service-desk/itil/images/itil-service-catalog-guide.png" alt="Imagen 1">
        <p>Solicitud de servicio</p>
    </div>
    </a>
    <a href="">
    <div class=" option div-con-borde">
        <img src="https://blumbox.do/wp-content/uploads/2020/10/tienda-online.png" alt="Imagen 2">
        <p>Comprar productos</p>
    </div>
    </a>
</div>

<style>
    .dashboard {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;

    }

    .div-con-borde {
        border: 3px solid black;
        padding: 10px;
        border-radius: 50px;
    }

    .option {
        text-align: center;
        margin: 100px;

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
            margin: 20px 0;
        }
    }

</style>


</body>
</html>

@endsection
