<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>registrados</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la Página de visualizacion de equipos</h1>
        <p class="mensaje-principal">Explora todos los equipos registrados</p>
    </header>

  
    <div class="bienvenida">
        <table>
            <thead>
                <tr>
                    <th>Nombre del Equipo</th>
                    <th>Deporte</th>
                    <th>Fecha de Apertura</th>
                    <th>Cantidad de Integrantes</th>
                    <th>Género</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Los Tigres</td>
                    <td>Fútbol</td>
                    <td>2025-01-15</td>
                    <td>11</td>
                    <td>Masculino</td>
                </tr>
                <tr>
                    <td>Las Leonas</td>
                    <td>Vóley</td>
                    <td>2024-12-01</td>
                    <td>6</td>
                    <td>Femenino</td>
                </tr>
                <tr>
                    <td>Los Guerreros</td>
                    <td>Baloncesto</td>
                    <td>2025-02-10</td>
                    <td>10</td>
                    <td>Mixto</td>
                </tr>
                <tr>
                    <td>Las Estrellas</td>
                    <td>Fútbol</td>
                    <td>2024-11-25</td>
                    <td>12</td>
                    <td>Mixto</td>
                </tr>
                <tr>
                    <td>Los Halcones</td>
                    <td>Rugby</td>
                    <td>2025-03-01</td>
                    <td>15</td>
                    <td>Masculino</td>
                </tr>
            </tbody>
        </table>
        </div>
        
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

