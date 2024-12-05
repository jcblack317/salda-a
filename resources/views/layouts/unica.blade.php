
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <header class="header-section text-center">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('index')}}">Peliculas y Series</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('peliculas')}}">Peliculas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('series')}}">Series</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Generos
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                            $ciencia = 'Ciencia ficción';
                            $comedia = 'Comedia';
                            $drama = 'Drama';
                            $fantasia = 'Fantasía';
                            $terror = 'Terror';
                        ?>
                        <li><a class="dropdown-item" href="{{route('genero', $ciencia)}}">Ciencia ficción</a></li>
                        <li><a class="dropdown-item" href="{{route('genero', $comedia)}}">Comedia</a></li>
                        <li><a class="dropdown-item" href="{{route('genero', $drama)}}">Drama</a></li>
                        <li><a class="dropdown-item" href="{{route('genero', $fantasia)}}">Fantasía</a></li>
                        <li><a class="dropdown-item" href="{{route('genero', $terror)}}">Terror</a></li>
                    </ul>
                    </li>
                </ul>
                <form action="{{route('buscar')}}" method="get" class="d-flex" role="search">
                    <input value="{{request('buscar')}}" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
    @yield('info')
    </main>

    <footer>
    <div class="text-center">
        <p>Realizado por:</p>
        <ul>
            <li>Blanquel Zamilpa Cristian yael</li>
            <li>Medina Araujo Camila Fernanda</li>
            <li>Razo Ocampo María Guadalupe</li>
            <li>Rodríguez García Oscar Isaac</li>
            <li>Sánchez Corona Dulce Belén</li>
        </ul>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>