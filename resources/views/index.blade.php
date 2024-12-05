@extends('layouts.unica')
@section('titulo')
    Inicio
@endsection

@section('info')
<div>
    @if (session('mensaje'))
    <div class="alert alert-danger" id="mensaje">
        {{session('mensaje')}}
    </div>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mensaje = document.getElementById('mensaje');
            if (mensaje) {
                setTimeout(() => {
                    mensaje.remove();
                }, 2000);
            }
        })
    </script>
</div>
<h1 class="text-center">Películas</h1>
@if ($peliculas->isEmpty())
    <div class="alert alert-warning">
        No existe resultados de la búsqueda.
    </div>
@else
    <div class="d-flex justify-content-center">
        {{$peliculas->links('pagination::bootstrap-5')}}
    </div>
    <div class="d-flex justify-content-around mb-2 d-flex flex-wrap">
        @foreach ($peliculas as $pelicula)
            <div class="card mb-2 p-2 bd-highlight" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="imagenes/peliculas/{{$pelicula->poster}}" class="img-fluid rounded-start" alt="{{ $pelicula->titulo }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pelicula->titulo}}</h5>
                            <p class="card-text">{{ $pelicula->sinopsis}}</p>
                            <p class="card-text"><small class="text-body-secondary">{{ $pelicula->clasificacion }}</small></p>
                            <p class="card-text"><small class="text-body-secondary">{{ $pelicula->genero }}</small></p>
                            <p class="card-text"><small class="text-body-secondary">{{ $pelicula->año_estreno }}</small></p>
                        <div class="btn-group">
                            <form action="{{route('borrar_pelicula',$pelicula)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                            <a href="{{route('editar_pelicula',$pelicula)}}">
                            <button type="button" class="btn btn-warning"><i class="fas fa-pencil"></i></button>
                            </a>
                            </div>
                            <a href="{{route('ver_pelicula',$pelicula)}}">
                                <button type="button" class="btn btn-success">Ver datos de la pelicula</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$peliculas->links('pagination::bootstrap-5')}}
    </div>
@endif
<hr>
<h1 class="text-center">Series</h1>
@if ($series->isEmpty())
    <div class="alert alert-warning">
        No existen resultados de la búsqueda
    </div>
@else
    <div class="d-flex justify-content-center">
        {{$series->links('pagination::bootstrap-5')}}
    </div>
    <div class="d-flex justify-content-around mb-2 d-flex flex-wrap">
        @foreach ($series as $serie)
            <div class="card mb-2 p-2 bd-highlight" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="imagenes/series/{{$serie->poster}}" class="img-fluid rounded-start" alt="{{ $serie->titulo }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $serie->titulo}}</h5>
                            <p class="card-text">{{ $serie->sinopsis}}</p>
                            <p class="card-text"><small class="text-body-secondary">{{ $serie->clasificacion }}</small></p>
                            <p class="card-text"><small class="text-body-secondary">{{ $serie->genero }}</small></p>
                            <p class="card-text"><small class="text-body-secondary">{{ $serie->año_inicio }} - {{ $serie->año_fin == null ? 'Actualidad' : $serie->año_fin}}</small></p>
                        <div class="btn-group">
                            <form action="{{route('borrar_serie',$serie)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                            <a href="{{route('editar_serie',$serie)}}">
                            <button type="button" class="btn btn-warning"><i class="fas fa-pencil"></i></button>
                            </a>
                            </div>
                            <a href="{{route('ver_serie',$serie)}}">
                                <button type="button" class="btn btn-success">Ver datos de la serie</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$series->links('pagination::bootstrap-5')}}
    </div>
@endif
@endsection