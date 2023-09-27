@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: "Nunito", sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover; /* Ajustar la imagen para que cubra todo el fondo */
            background-repeat: no-repeat; /* Evitar que la imagen se repita */
            background-attachment: fixed;
           background-image: url("https://www.xtrafondos.com/wallpapers/degradado-difuminado-cafe-y-azul-8005.jpg");
        }

        .dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            height: 100vh;
        }

        /* Ajusta el tamaño de la imagen para cubrir el contenedor */
        #imghome img {
            width: 165%; /* Ancho del 100% del contenedor */
            height: auto; /* Altura automática para mantener la proporción original */
        }

        .box {
            width: 250px;
            height: 250px;
            background-color: white;
            margin: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            position: relative;
            border: 2px solid #00002EFF;

        }
        .box i {
            font-size: 150px;
            margin-top: 30px;
        }

        .box p {
            margin-top: 10px;
            font-size: 18px;
            color:white;
        }
        .white-icon {
            color: white; /* Cambia el color del ícono */
        }
        .box-color {
            background: -moz-linear-gradient(270deg, rgb(52, 54, 53) 0%, rgb(0, 0, 46) 50%, rgb(127, 19, 95) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(52, 54, 53)), color-stop(50%, rgb(0, 0, 46)), color-stop(100%, rgb(127, 19, 95)));
            background: -webkit-linear-gradient(270deg, rgb(52, 54, 53) 0%, rgb(0, 0, 46) 50%, rgb(127, 19, 95) 100%);
            background: linear-gradient(180deg, rgb(52, 54, 53) 0%, rgb(0, 0, 46) 50%, rgb(127, 19, 95) 100%);
        }
        .info-box {
            width: 30%; /* El cuadro de información ocupa el 30% del ancho */
            background-color: transparent;
            margin-top:20px;
            padding: 10px;
            box-shadow: 0 0 10px rgb(5, 40, 77);
            border-radius: 10px;
            text-align: left;
            border: 2px solid #e6b33d;
        }

        /* Estilos para los datos del usuario */
        .info-box h2 {
            font-size: 25px;
            margin-bottom: 10px;
            color:#e6b33d;
        }

        .info-box p {
            font-size: 16px;
            margin: 5px 0;

        }


    </style>
</head>
<body>

<div class="dashboard">
    <div class="box box-color">
       <i class="fa-solid fa-bell white-icon"></i>
        <p>Ordenes de servicio</p>
    </div>
    <div class="box box-color">
        <i class="fa-solid fa-computer white-icon"></i>
        <p>Productos</p>
    </div>
    <div class="box box-color">
        <i class="fas fa-users white-icon"></i>
        <p>Tecnicos</p>
    </div>
    <div class="info-box">
        <h2>Información del Usuario</h2>
        <p>Fecha: <span id="fecha"></span></p>
        <p>Hora: <span id="hora"></span></p>
        <p>Nombre: <span id="nombre"></span></p>
        <!-- Otros datos del usuario -->
    </div>
    <tr>
<div id="imghome">
    <img src="https://aixperu.com/wp-content/uploads/2018/10/28938407_1797167077002380_1879917463_o-768x432.png">
</div>


</div>
@endsection

@section('js')
<script>
    function actualizarFechaHora() {
        const fechaSpan = document.getElementById('fecha');
        const horaSpan = document.getElementById('hora');
        const nombreSpan = document.getElementById('nombre');

        // Obtener la fecha y hora actual
        const fechaActual = new Date();
        const dia = fechaActual.getDate().toString().padStart(2, '0');
        const mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');
        const año = fechaActual.getFullYear();
        const hora = fechaActual.getHours().toString().padStart(2, '0');
        const minutos = fechaActual.getMinutes().toString().padStart(2, '0');
        const segundos = fechaActual.getSeconds().toString().padStart(2, '0');
        const fechaFormateada = `${dia}/${mes}/${año}`;
        const horaFormateada = `${hora}:${minutos}:${segundos}`;

        // Mostrar la fecha y hora en los elementos correspondientes
        fechaSpan.textContent = fechaFormateada;
        horaSpan.textContent = horaFormateada;

        // Nombre del usuario (puedes cambiar esto)
        nombreSpan.textContent = "Nombre de Usuario"; // Cambia esto por el nombre del usuario o el dato que desees mostrar
    }

    // Actualiza la fecha y hora cada segundo
    setInterval(actualizarFechaHora, 1000);

    // Llama a la función inicialmente para mostrar la fecha y hora actual
    actualizarFechaHora();


    // Actualiza la hora cada segundo
    setInterval(actualizarHora, 1000);

    // Llama a la función inicialmente para mostrar la hora actual
    actualizarHora();

</script>
</body>
</html>


@endsection
