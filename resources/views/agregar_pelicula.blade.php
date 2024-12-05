@extends('layouts.unica')
@section('titulo')
    Agregar Pelicula
@endsection
@section('info')
<br><br>

<div class="container mt-5">
    <h2 class="text-center mb-4">Agregar Película</h2>

    <form action="{{ route('guardar_pelicula') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="titulo" class="form-label">Título de la película:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}" required>
        </div>

        <div class="mb-3">
            <label for="titulo_original" class="form-label">Título original de la película:</label>
            <input type="text" id="titulo_original" name="titulo_original" class="form-control" value="{{ old('titulo_original') }}" required>
        </div>

        <div class="mb-3">
            <label for="año_estreno" class="form-label">Año de estreno de la película:</label>
            <input type="number" id="año_estreno" name="año_estreno" class="form-control" value="{{ old('año_estreno') }}" required min="1880" max="{{ date('Y') }}">
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duración de la película (minutos):</label>
            <input type="number" id="duracion" name="duracion" class="form-control" value="{{ old('duracion') }}" required min="1">
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género de la película:</label>
            <select id="genero" name="genero" class="form-select" required>
                <option value="Drama" {{ old('genero') == 'Drama' ? 'selected' : '' }}>Drama</option>
                <option value="Comedia" {{ old('genero') == 'Comedia' ? 'selected' : '' }}>Comedia</option>
                <option value="Ciencia ficción" {{ old('genero') == 'Ciencia Ficción' ? 'selected' : '' }}>Ciencia Ficción</option>
                <option value="Acción" {{ old('genero') == 'Acción' ? 'selected' : '' }}>Acción</option>
                <option value="Fantasía" {{ old('genero') == 'Fantasía' ? 'selected' : '' }}>Fantasía</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis de la película:</label>
            <textarea id="sinopsis" name="sinopsis" class="form-control" rows="4" required>{{ old('sinopsis') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="clasificacion" class="form-label">Clasificación de la película:</label>
            <select id="clasificacion" name="clasificacion" class="form-select" required>
                <option value="AA" {{ old('clasificacion') == 'AA' ? 'selected' : '' }}>AA</option>
                <option value="A" {{ old('clasificacion') == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('clasificacion') == 'B' ? 'selected' : '' }}>B</option>
                <option value="B15" {{ old('clasificacion') == 'B15' ? 'selected' : '' }}>B15</option>
                <option value="C" {{ old('clasificacion') == 'C' ? 'selected' : '' }}>C</option>
                <option value="D" {{ old('clasificacion') == 'D' ? 'selected' : '' }}>D</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="idioma" class="form-label">Idioma de la película:</label>
            <input type="text" id="idioma" name="idioma" class="form-control" value="{{ old('idioma') }}" required>
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Póster de la película:</label>
            <input type="file" id="poster" name="poster" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection