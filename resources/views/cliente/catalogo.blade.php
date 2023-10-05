@extends('layouts.app3')

@section('content')
    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en línea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 30px;
        }

        .card {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            color: #666;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }


        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }

    </style>
</head>

<body>
<header>
</header>

<main>
    <!-- Contenido principal -->
    <section class="container">
        <h1>Productos disponibles</h1>
        <div class="row" >
            <div class="col-md-4 " >
                <div class="card" >
                    <img src="producto2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Descripción del producto 2.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="producto2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Descripción del producto 2.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="producto3.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">Descripción del producto 3.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer style="background-color:#9ecbe6 ">
    <!-- Pie de página -->
    <div class="container" >
        <p>© Centro de servicios IndexGT 2023.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
@endsection
