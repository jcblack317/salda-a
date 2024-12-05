@extends('layouts.unica')

@section('titulo')
   Editar Película
@endsection

@section('info')
<br><br>

<div class="container mt-5">
   <h2 class="text-center mb-4">Editar Película</h2>

   <form action="{{ route('actualizar_pelicula', $pelicula) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      @csrf
      @method('PUT')

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
         <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo', $pelicula->titulo) }}" required>
      </div>

      <div class="mb-3">
         <label for="titulo_original" class="form-label">Título original de la película:</label>
         <input type="text" id="titulo_original" name="titulo_original" class="form-control" value="{{ old('titulo_original', $pelicula->titulo_original) }}" required>
      </div>

      <div class="mb-3">
         <label for="año_estreno" class="form-label">Año de estreno de la película:</label>
         <input type="text" id="año_estreno" name="año_estreno" class="form-control" value="{{ old('año_estreno', $pelicula->año_estreno) }}" required>
      </div>

      <div class="mb-3">
         <label for="duracion" class="form-label">Duración de la película:</label>
         <input type="text" id="duracion" name="duracion" class="form-control" value="{{ old('duracion', $pelicula->duracion) }}" required>
      </div>

      <div class="mb-3">
         <label for="sinopsis" class="form-label">Sinopsis de la película:</label>
         <textarea id="sinopsis" name="sinopsis" class="form-control" rows="4" required>{{ old('sinopsis', $pelicula->sinopsis) }}</textarea>
      </div>

      <div class="mb-3">
         <label for="genero" class="form-label">Género de la película:</label>
         <select id="genero" name="genero" class="form-select" required>
            <option value="Drama" {{ $pelicula->genero == 'Drama' ? 'selected' : '' }}>Drama</option>
            <option value="Comedia" {{ $pelicula->genero == 'Comedia' ? 'selected' : '' }}>Comedia</option>
            <option value="Ciencia ficción" {{ $pelicula->genero == 'Ciencia ficción' ? 'selected' : '' }}>Ciencia Ficción</option>
            <option value="Acción" {{ $pelicula->genero == 'Acción' ? 'selected' : '' }}>Acción</option>
            <option value="Fantasía" {{ $pelicula->genero == 'Fantasía' ? 'selected' : '' }}>Fantasía</option>
         </select>
      </div>

      <div class="mb-3">
         <label for="clasificacion" class="form-label">Clasificación de la película:</label>
         <select id="clasificacion" name="clasificacion" class="form-select" required>
            <option value="AA" {{ $pelicula->clasificacion == 'AA' ? 'selected' : '' }}>AA</option>
            <option value="A" {{ $pelicula->clasificacion == 'A' ? 'selected' : '' }}>A</option>
            <option value="B" {{ $pelicula->clasificacion == 'B' ? 'selected' : '' }}>B</option>
            <option value="B15" {{ $pelicula->clasificacion == 'B15' ? 'selected' : '' }}>B15</option>
            <option value="C" {{ $pelicula->clasificacion == 'C' ? 'selected' : '' }}>C</option>
            <option value="D" {{ $pelicula->clasificacion == 'D' ? 'selected' : '' }}>D</option>
         </select>
      </div>

      <div class="mb-3">
         <label for="idioma" class="form-label">Idioma de la película:</label>
         <input type="text" id="idioma" name="idioma" class="form-control" value="{{ old('idioma', $pelicula->idioma) }}" required>
      </div>

      <div class="mb-3">
         <label for="poster" class="form-label">Póster de la película:</label>
         <input type="file" id="poster" name="poster" class="form-control">
      </div>

      <div class="d-flex justify-content-between">
         <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk"></i> Guardar</button>
         <a href="{{ route('peliculas') }}" class="btn btn-secondary">Cancelar</a>
      </div>
   </form>
</div>
@endsection