

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: "Nunito", sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://www.xtrafondos.com/wallpapers/degradado-difuminado-cafe-y-azul-8005.jpg");
        }
        .navbar.hide {
            left: 0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background: -moz-linear-gradient(270deg, rgb(12, 110, 169) 0%, rgb(158, 203, 230) 50%, rgb(60, 188, 208) 100%);;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(12, 110, 169)), color-stop(50%, rgb(158, 203, 230)), color-stop(100%, rgb(60, 188, 208)));
            background: -webkit-linear-gradient(270deg, rgb(12, 110, 169) 0%, rgb(158, 203, 230) 50%, rgb(60, 188, 208) 100%);
            background: linear-gradient(180deg, rgb(12, 110, 169) 0%, rgb(158, 203, 230) 50%, rgb(60, 188, 208) 100%);
            transition: left 0.3s ease-in-out;
            overflow-y: auto;


        }

        .sidebar.active {
            left: 0;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #ff1457;
            font-size: 20px;
            cursor: pointer;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            position: relative;
            transition: color 0.3s, background-size 0.3s ease;
        }
        .sidebar ul li a::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0; /* Ancho inicial */
            height: 100%;
            background-color: #3cbcd0;
            z-index: -1; /* Detrás del texto */
            transition: width 0.8s ease; /* Transición del ancho del fondo */
        }

        .sidebar ul li a:hover::before {
            width: 100%; /* Ancho al pasar el cursor */
        }

        .sidebar ul li a:hover {
            background-color:#3cbcd0;
            background-size: 200px; /* Ajusta el ancho del color de fondo aquí */
            transition: background-size 0.3s; /* Agrega una transición suave */
            width: 100%; /* Modifica el ancho del color de fondo */
            display: block;
            padding: 15px 0;
        }

        .content {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        .content.active {
            margin-left: 250px;
        }
        /* Estilo del navbar */
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #0C6EA9FF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            transition: left 0.3s;
        }

        .navbar.hide {
            left: 250px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 25px;
            color:white;
            text-align: center;
        }

        .logo img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .user {
            position: relative;
        }

        .login-button {
            background-color: #459a96;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #333;
            border: 1px solid #666;
        }

        .dropdown ul {
            list-style: none;
            padding: 0;
        }

        .dropdown li {
            text-align: center;
        }

        .dropdown a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .login-button:hover + .dropdown,
        .dropdown:hover {
            display: block;
        }


    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="https://www.pentasys.es/wp-content/uploads/2021/05/mantenimiento-de-equipos-informaticos.png" alt="Logo">
        <p>Centro de Servicio IndexGT</p>
    </div>
    <div class="user">
        <form method="post" action="/logout">
            @csrf
            <button type="submit" class="btn btn-outline-dark" id="logoutButton">
                <i class="fas fa-user"></i> Cerrar Sesión
            </button>
        </form>
    </div>

</nav>
<div class="sidebar" id="sidebar">
    <div class="close-btn" onclick="closeSidebar()"><i class="fas fa-times"></i></div>
    <ul>
        <li><a href="{{url('/')}}"><i class="fas fa-home"></i> Inicio</a></li>
        <li><a  href="{{url('read/tecnico')}}"><i class="fas fa-user"></i> Personal Tecnico</a></li>
        <li><a href="{{url('/producs')}}"><i class="fa-solid fa-cart-plus"></i> productos</a></li>
        <li><a href="{{url('servicios')}}"> <i class="fa-solid fa-clipboard-list"></i> Ordenes de servicio</a></li>
        <li><a href="{{url('/clientes')}}">     <i class="fas fa-truck"></i> Envios </a></li>
        <li><a href="#"><i class="fa-solid fa-chart-line"></i> Informes</a></li>
    </ul>
</div>

<div class="content" id="content">
    <div class="open-btn" onclick="openSidebar()"><i class="fas fa-bars"></i></div>
    @yield('content')
</div>


<script>

    function openSidebar() {
        document.getElementById("sidebar").classList.add("active");
        document.getElementById("content").classList.add("active");
        document.querySelector(".navbar").classList.add("hide"); // Oculta el navbar cuando se abre el menú
    }

    function closeSidebar() {
        document.getElementById("sidebar").classList.remove("active");
        document.getElementById("content").classList.remove("active");
        document.querySelector(".navbar").classList.remove("hide");

    }


</script>
</body>
</html>

