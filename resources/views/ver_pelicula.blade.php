@extends('layouts.unica')

@section('titulo')
    Detalles de la Película
@endsection

@section('info')
<div class="container mt-5">
    <h1 class="text-center">{{ $pelicula->titulo }}</h1>

    <div class="row mt-4">
        <div class="col-md-4">
            <img src="imagenes/peliculas/{{$pelicula->poster}}" class="img-fluid rounded" alt="{{ $pelicula->titulo }}">
        </div>
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr>
                    <th>Título Original:</th>
                    <td>{{ $pelicula->titulo_original }}</td>
                </tr>
                <tr>
                    <th>Año de Estreno:</th>
                    <td>{{ $pelicula->año_estreno }}</td>
                </tr>
                <tr>
                    <th>Duración:</th>
                    <td>{{ $pelicula->duracion }} minutos</td>
                </tr>
                <tr>
                    <th>Género:</th>
                    <td>{{ $pelicula->genero }}</td>
                </tr>
                <tr>
                    <th>Clasificación:</th>
                    <td>{{ $pelicula->clasificacion }}</td>
                </tr>
                <tr>
                    <th>Idioma:</th>
                    <td>{{ $pelicula->idioma }}</td>
                </tr>
                <tr>
                    <th>Sinopsis:</th>
                    <td>{{ $pelicula->sinopsis }}</td>
                </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('editar_pelicula', $pelicula) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar</a>
                <form action="{{ route('borrar_pelicula', $pelicula) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                </form>
                <a href="{{ route('index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection