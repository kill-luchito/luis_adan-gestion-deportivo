<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Inicio</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la Página de Deportes</h1>
        <p class="mensaje-principal">Explora todos los equipos, deportistas y mucho más.</p>
    </header>

    
    <div class="bienvenida">
        <h2>¡Bienvenido al mundo de los deportes!</h2>
        <p>Únete a nuestra plataforma y descubre todos los deportes, equipos y deportistas que están haciendo historia. ¡Es momento de ponerte en acción!</p>
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
