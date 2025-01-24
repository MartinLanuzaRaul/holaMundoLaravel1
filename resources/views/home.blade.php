<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Menú</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="{{route('rutaIndiceUsuario')}}">Usuarios</a>
        <a href="{{route('rutaIndiceProducto')}}">Productos</a>
        <a href="{{route('rutaIndicePedido')}}">Pedidos</a>
    </div>

    <div style="padding: 20px;">
        <h1>Bienvenido a la página de administración</h1>
        <p>Selecciona una opción del menú para navegar.</p>
    </div>

</body>
</html>