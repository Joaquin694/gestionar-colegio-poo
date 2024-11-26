<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        /* Estilo del logo */
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar-nav li {
            margin: 0 0.5rem;
        }
    </style>

</head>

<body>
    <div>
        <nav>
            <div>

                <div id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <li><a href="{{ route('docentes.index') }}">Docentes</a></li>
                        <li><a href="{{ route('estudiantes.index') }}">Estudiantes</a></li>
                        <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
                        <li><a href="{{ route('asistencias.index') }}">Asistencias</a></li>
                        <li><a href="{{ route('pagos.index') }}">Pagos</a></li>
                        <li><a href="{{ route('matriculas.index') }}">Matriculas</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>