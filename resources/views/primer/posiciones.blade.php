<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Posiciones</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la Página de Posiciones</h1>
        <p class="mensaje-principal">Explora la pocion de tu equipo o tabla en general</p>
    </header>

    
    <div class="bienvenida">
            
    </div>

    <nav>
        <button><a href="{{route('home.index')}}">Inicio</a></button>
        <button><a href="{{route('home.create')}}">Equipos</a></button>
        <button><a href="{{route('home.show', 0)}}">Deportistas</a></button>
        <button><a href="{{route('home.edit', 0)}}">Entrenadores</a></button>
    </nav>

    <footer>
        <p>&copy; 2025 Página de Deportes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>