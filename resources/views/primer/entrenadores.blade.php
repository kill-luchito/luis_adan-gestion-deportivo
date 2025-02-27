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
        <h1>Bienvenido a la Página de Entrenadores</h1>
        <p class="mensaje-principal">Explora la asignacion de Entrenadores y programacion de partidos</p>
    </header>

    
    <div class="bienvenida">
        <table>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Especialidad</th>
            </tr>
            <tr>
              <td>Juan</td>
              <td>Pérez</td>
              <td>Fútbol</td>
            </tr>
            <tr>
              <td>María</td>
              <td>López</td>
              <td>Atletismo</td>
            </tr>
            <tr>
              <td>Carlos</td>
              <td>García</td>
              <td>Natación</td>
            </tr>
            <tr>
              <td>Ana</td>
              <td>Martínez</td>
              <td>Tenis</td>
            </tr>
            <tr>
              <td>Roberto</td>
              <td>Sánchez</td>
              <td>Baloncesto</td>
            </tr>
          </table>
          
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