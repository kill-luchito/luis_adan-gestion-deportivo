<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Registros de equipo</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la Página de Registros</h1>
        <p class="mensaje-principal">aqui puedes registrar tu equipo</p>
    </header>
    
    <div class="bienvenida">
        <nav>
            
            <form action="/registrar-equipo" method="post">
                
                <div class="form-group">
                    <label for="nombreEquipo">Nombre del equipo:</label>
                    <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" required>
                </div>
        
                
                <div class="form-group">
                    <label for="deporte">Deporte:</label>
                    <input type="text" class="form-control" id="deporte" name="deporte" required>
                </div>
        
                
                <div class="form-group">
                    <label for="fechaApertura">Fecha de apertura:</label>
                    <input type="date" class="form-control" id="fechaApertura" name="fechaApertura" required>
                </div>
        
               
                <div class="form-group">
                    <label for="cantidadIntegrantes">Cantidad de integrantes:</label>
                    <input type="number" class="form-control" id="cantidadIntegrantes" name="cantidadIntegrantes" required>
                </div>
        
                <div class="form-group">
                    <label>Género del equipo:</label><br>
                    <input type="radio" id="masculino" name="genero" value="Masculino" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" id="femenino" name="genero" value="Femenino" required>
                    <label for="femenino">Femenino</label><br>
                    <input type="radio" id="mixto" name="genero" value="Mixto" required>
                    <label for="mixto">Mixto</label><br>
                </div>
        
                
                <button><a href="{{route('Registros.create')}}">Crear equipo</a></button>
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


