@extends('layouts.app3')

@section('content')
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="app.js" async></script>
    <title>Catalogo| </title>
</head>
<body>
<header>
    <h1> 🖱️ Productos & accesorios tecnologicos ⌨️</h1>
</header>
<section class="contenedor">
    <!-- Contenedor de elementos -->
    <div class="contenedor-items">
        <div class="item">
            <span class="titulo-item">Box Engasse</span>
            <img src="" alt="" class="img-item">
            <span class="precio-item">$15.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">English Horse</span>
            <img src="img/englishrose.png" alt="" class="img-item">
            <span class="precio-item">$25.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Knock Nap</span>
            <img src="img/knocknap.png" alt="" class="img-item">
            <span class="precio-item">$35.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">La Night</span>
            <img src="img/lanight.png" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Silver All</span>
            <img src="img/silverall.png" alt="" class="img-item">
            <span class="precio-item">$32.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Skin Glam</span>
            <img src="img/skinglam.png" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Midimix</span>
            <img src="img/midimix.png" alt="" class="img-item">
            <span class="precio-item">$54.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Sir Blue</span>
            <img src="img/sirblue.png" alt="" class="img-item">
            <span class="precio-item">$32.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Middlesteel</span>
            <img src="img/middlesteel.png" alt="" class="img-item">
            <span class="precio-item">$42.800</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
    </div>
    <!-- Carrito de Compras -->
    <div class="carrito" id="carrito">
        <div class="header-carrito">
            <h2>Tu Carrito</h2>
        </div>

        <div class="carrito-items">
            <!--
            <div class="carrito-item">
                <img src="img/boxengasse.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Box Engasse</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$15.000,00</span>
                </div>
               <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </span>
            </div>
            <div class="carrito-item">
                <img src="img/skinglam.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Skin Glam</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="3" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$18.000,00</span>
                </div>
               <button class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </button>
            </div>
             -->
        </div>
        <div class="carrito-total">
            <div class="fila">
                <strong>Tu Total</strong>
                <span class="carrito-precio-total">
                        $120.000,00
                    </span>
            </div>
            <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
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
            height: 300px;
        }
        header h1{
            text-align: center;
            font-size: 60px;
            /* background-color: #000; */
            color: #fff;
            padding: 50px 0;
        }
        .contenedor{
            max-width: 1200px;
            padding: 10px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            /* oculto lo que queda fuera del .contenedor */
            contain: paint;
        }
        /* SECCION CONTENEDOR DE ITEMS */
        .contenedor .contenedor-items{
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            grid-gap:30px;
            grid-row-gap: 30px;
            /* width: 60%; */
            width: 100%;
            transition: .3s;
        }
        .contenedor .contenedor-items .item{
            max-width: 200px;
            margin: auto;
            border: 1px solid #666;
            border-radius: 10px;
            padding: 20px;
            transition: .3s;
        }
        .contenedor .contenedor-items .item .img-item{
            width: 100%;
        }
        .contenedor .contenedor-items .item:hover{
            box-shadow: 0 0 10px #666;
            scale: 1.05;
        }
        .contenedor .contenedor-items .item .titulo-item{
            display: block;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }
        .contenedor .contenedor-items .item .precio-item{
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 22px;
        }

        .contenedor .contenedor-items .item .boton-item{
            display: block;
            margin: 10px auto;
            border: none;
            background-color: black;
            color: #fff;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        /* seccion carrito */
        .carrito{
            border: 1px solid #666;
            width: 35%;
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: auto;
            position: sticky !important;
            top: 0;
            transition: .3s;
            /* Estilos para ocultar */
            margin-right: -100%;
            opacity: 0;
        }
        .carrito .header-carrito{
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 30px 0;
        }
        .carrito .carrito-item{
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            position: relative;
            border-bottom: 1px solid #666;
            padding: 20px;
        }
        .carrito .carrito-item img{
            margin-right: 20px;
        }
        .carrito .carrito-item .carrito-item-titulo{
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .carrito .carrito-item .selector-cantidad{
            display: inline-block;
            margin-right: 25px;
        }
        .carrito .carrito-item .carrito-item-cantidad{
            border: none;
            font-size: 18px;
            background-color: transparent;
            display: inline-block;
            width:30px;
            padding: 5px;
            text-align: center;
        }
        .carrito .carrito-item .selector-cantidad i{
            font-size: 18px;
            width: 32px;
            height: 32px;
            line-height: 32px;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #000;
            cursor: pointer;
        }
        .carrito .carrito-item .carrito-item-precio{
            font-weight: bold;
            display: inline-block;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .carrito .carrito-item .btn-eliminar{
            position: absolute;
            right: 15px;
            top: 15px;
            color: #000;
            font-size: 20px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #000;
            cursor: pointer;
            display: block;
            background: transparent;
            z-index: 20;
        }
        .carrito .carrito-item .btn-eliminar i{
            pointer-events: none;
        }

        .carrito-total{
            background-color: #f3f3f3;
            padding: 30px;
        }
        .carrito-total .fila{
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .carrito-total .btn-pagar{
            display: block;
            width: 100%;
            border: none;
            background: #000;
            color: #fff;
            border-radius: 5px;
            font-size: 18px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: .3s;
        }
        .carrito-total .btn-pagar:hover{
            scale: 1.05;
        }

        /* SECCION RESPONSIVE */
        @media screen and (max-width: 850px) {
            .contenedor {
                display: block;
            }
            .contenedor-items{
                width: 100% !important;
            }
            .carrito{
                width: 100%;
            }
        }
    </style>
</section>
</body>
</html>
@endsection
