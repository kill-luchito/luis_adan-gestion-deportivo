<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Deportista</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la Página de Deportista</h1>
        <p class="mensaje-principal">aqui puedes registrarte o visualizar los deportistas</p>
    </header>
    <div class="bienvenida">
        <nav>
            <button><a href="{{route('Registros.show', 0)}}">registro deportista</a></button>
            <button><a href="{{route('Registros.edit', 0)}}">visualizar deportista</a></button>
        </nav>
        </div>

    <nav>
        <button><a href="{{route('home.index')}}">Inicio</a></button>
        <button><a href="{{route('home.create')}}">Equipos</a></button>
        <button><a href="{{route('home.show', 0)}}">Deportistas</a></button>
    </nav>

    <footer>
        <p>&copy; 2025 Página de Deportes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>