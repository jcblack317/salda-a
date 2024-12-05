@extends('layouts.unica')
@section('titulo')
   Editar Serie
@endsection

@section('info')
<br><br>

<div class="container mt-5">
   <h2 class="text-center mb-4">Editar Serie</h2>

   <form action="{{ route('actualizar_serie', $serie) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
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
         <label for="titulo" class="form-label">Título de la serie:</label>
         <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo', $serie->titulo) }}" required>
      </div>

      <div class="mb-3">
         <label for="titulo_original" class="form-label">Título original de la serie:</label>
         <input type="text" id="titulo_original" name="titulo_original" class="form-control" value="{{ old('titulo_original', $serie->titulo_original) }}" required>
      </div>

      <div class="mb-3">
         <label for="año_inicio" class="form-label">Año de estreno de la serie:</label>
         <input type="text" id="año_inicio" name="año_inicio" class="form-control" value="{{ old('año_inicio', $serie->año_inicio) }}" required>
      </div>

      <div class="mb-3">
         <label for="año_fin" class="form-label">Año de final de la serie:</label>
         <input type="text" id="año_fin" name="año_fin" class="form-control" value="{{ old('año_fin', $serie->año_fin) }}">
      </div>

      <div class="mb-3">
         <label for="estado" class="form-label">Estado de la serie:</label>
         <input type="text" id="estado" name="estado" class="form-control" value="{{ old('estado', $serie->estado) }}" required>
      </div>

      <div class="mb-3">
         <label for="pais" class="form-label">País de la serie:</label>
         <input type="text" id="pais" name="pais" class="form-control" value="{{ old('pais', $serie->pais) }}" required>
      </div>

      <div class="mb-3">
         <label for="creador" class="form-label">Creador de la serie:</label>
         <input type="text" id="creador" name="creador" class="form-control" value="{{ old('creador', $serie->creador) }}" required>
      </div>

      <div class="mb-3">
         <label for="sinopsis" class="form-label">Sinopsis de la serie:</label>
         <textarea id="sinopsis" name="sinopsis" class="form-control" rows="4" required>{{ old('sinopsis', $serie->sinopsis) }}</textarea>
      </div>

      <div class="mb-3">
         <label for="genero" class="form-label">Género de la serie:</label>
         <select id="genero" name="genero" class="form-select" required>
            <option value="Drama" {{ $serie->genero == 'Drama' ? 'selected' : '' }}>Drama</option>
            <option value="Comedia" {{ $serie->genero == 'Comedia' ? 'selected' : '' }}>Comedia</option>
            <option value="Ciencia Ficción" {{ $serie->genero == 'Ciencia Ficción' ? 'selected' : '' }}>Ciencia Ficción</option>
            <option value="Acción" {{ $serie->genero == 'Acción' ? 'selected' : '' }}>Acción</option>
            <option value="Fantasía" {{ $serie->genero == 'Fantasía' ? 'selected' : '' }}>Fantasía</option>
         </select>
      </div>

      <div class="mb-3">
         <label for="clasificacion" class="form-label">Clasificación de la serie:</label>
         <select id="clasificacion" name="clasificacion" class="form-select" required>
            <option value="AA" {{ $serie->clasificacion == 'TV-Y' ? 'selected' : '' }}>AA</option>
            <option value="A" {{ $serie->clasificacion == 'TV-G' ? 'selected' : '' }}>A</option>
            <option value="B" {{ $serie->clasificacion == 'TV-PG' ? 'selected' : '' }}>B</option>
            <option value="B15" {{ $serie->clasificacion == 'TV-14' ? 'selected' : '' }}>B15</option>
            <option value="C" {{ $serie->clasificacion == 'TV-MA' ? 'selected' : '' }}>C</option>
            <option value="D" {{ $serie->clasificacion == 'TV-MA' ? 'selected' : '' }}>D</option>
         </select>
      </div>

      <div class="mb-3">
         <label for="idioma" class="form-label">Idioma de la serie:</label>
         <input type="text" id="idioma" name="idioma" class="form-control" value="{{ old('idioma', $serie->idioma) }}" required>
      </div>

      <div class="mb-3">
         <label for="temporadas" class="form-label">Temporadas de la serie:</label>
         <input type="text" id="temporadas" name="temporadas" class="form-control" value="{{ old('temporadas', $serie->temporadas) }}" required>
      </div>

      <div class="mb-3">
         <label for="capitulos" class="form-label">Capitulos de la serie:</label>
         <input type="text" id="capitulos" name="capitulos" class="form-control" value="{{ old('capitulos', $serie->capitulos) }}" required>
      </div>

      <div class="mb-3">
         <label for="poster" class="form-label">Póster de la serie:</label>
         <input type="file" id="poster" name="poster" class="form-control">
      </div>

      <div class="d-flex justify-content-between">
         <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk"></i> Guardar</button>
         <a href="{{ route('index') }}" class="btn btn-secondary">Cancelar</a>
      </div>
   </form>
</div>
@endsection