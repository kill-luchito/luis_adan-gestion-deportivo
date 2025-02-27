<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Registros de entrenador</title>
</head>
<body>
    <header>  
        <h1>Bienvenido a la Página de Registros</h1>
        <p class="mensaje-principal">este es el registro de deportista</p>
    </header>
    
    <div class="bienvenida">
        <nav>
            <form action="/registrar-equipo" method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
    
            <div>
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>
    
            <div>
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" readonly>
            </div>
    
            <div>
                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
            </div>
            <div>
                <label for="equipo">Equipo ID:</label>
                <input type="text" class="form-control" id="equipo" name="equipo" required>
            </div>


                <button><a href="{{route('Registros.edit', 0)}}">visualizar deportista</a></button>

            </form>
        
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