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
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Edad</th>
                        <th>Nacionalidad</th>
                        <th>Equipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan</td>
                        <td>Pérez</td>
                        <td>1995-06-15</td>
                        <td>29</td>
                        <td>Mexicana</td>
                        <td>Los Tigres</td>
                    </tr>
                    <tr>
                        <td>María</td>
                        <td>González</td>
                        <td>1990-04-10</td>
                        <td>34</td>
                        <td>Argentina</td>
                        <td>Las Leonas</td>
                    </tr>
                    <tr>
                        <td>Pedro</td>
                        <td>López</td>
                        <td>1998-11-23</td>
                        <td>26</td>
                        <td>Colombiana</td>
                        <td>Los Guerreros</td>
                    </tr>
                    <tr>
                        <td>Ana</td>
                        <td>Ramírez</td>
                        <td>1993-02-05</td>
                        <td>32</td>
                        <td>Peruana</td>
                        <td>Las Estrellas</td>
                    </tr>
                    <tr>
                        <td>Carlos</td>
                        <td>Fernández</td>
                        <td>1997-08-30</td>
                        <td>27</td>
                        <td>Chilena</td>
                        <td>Los Halcones</td>
                    </tr>
                </tbody>
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

