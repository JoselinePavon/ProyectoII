<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

            <div class="user" style="margin: 1px;">
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-outline-dark" id="logoutButton">
                        <i class="fas fa-user"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>

</nav>
    @yield('content')
</div>


</body>
</html>


