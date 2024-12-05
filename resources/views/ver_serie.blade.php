@extends('layouts.unica')

@section('titulo')
    Detalles de la Serie
@endsection

@section('info')
<div class="container mt-5">
    <h1 class="text-center">{{ $serie->titulo }}</h1>

    <div class="row mt-4">
        <div class="col-md-4">
            <img src="imagenes/series/{{ $serie->poster }}" class="img-fluid rounded" alt="{{ $serie->titulo }}">
        </div>
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr>
                    <th>Título Original:</th>
                    <td>{{ $serie->titulo_original }}</td>
                </tr>
                <tr>
                    <th>Año de Inicio:</th>
                    <td>{{ $serie->año_inicio }}</td>
                </tr>
                <tr>
                    <th>Año de Final:</th>
                    <td>{{ $serie->año_fin ?? 'Actualidad' }}</td>
                </tr>
                <tr>
                    <th>Estado:</th>
                    <td>{{ $serie->estado }}</td>
                </tr>
                <tr>
                    <th>País:</th>
                    <td>{{ $serie->pais }}</td>
                </tr>
                <tr>
                    <th>Creador:</th>
                    <td>{{ $serie->creador }}</td>
                </tr>
                <tr>
                    <th>Género:</th>
                    <td>{{ $serie->genero }}</td>
                </tr>
                <tr>
                    <th>Clasificación:</th>
                    <td>{{ $serie->clasificacion }}</td>
                </tr>
                <tr>
                    <th>Idioma:</th>
                    <td>{{ $serie->idioma }}</td>
                </tr>
                <tr>
                    <th>Sinopsis:</th>
                    <td>{{ $serie->sinopsis }}</td>
                </tr>
                <tr>
                    <th>Sinopsis:</th>
                    <td>{{ $serie->temporadas }}</td>
                </tr>
                <tr>
                    <th>Sinopsis:</th>
                    <td>{{ $serie->capitulos }}</td>
                </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('editar_serie', $serie) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar</a>
                <form action="{{ route('borrar_serie', $serie) }}" method="post" class="d-inline">
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