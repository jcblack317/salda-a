@extends('layouts.unica')

@section('titulo')
    Agregar Serie
@endsection

@section('info')
<br><br>

<form action="{{ route('guardar_serie') }}" method="post" enctype="multipart/form-data">
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

    <label for="titulo">Título de la serie:</label>
    <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
    <br><br>

    <label for="titulo_original">Título original de la serie:</label>
    <input type="text" id="titulo_original" name="titulo_original" value="{{ old('titulo_original') }}" required>
    <br><br>

    <label for="año_inicio">Año de inicio de la serie:</label>
    <input type="number" id="año_inicio" name="año_inicio" value="{{ old('año_inicio') }}" required min="1900" max="{{ date('Y') }}">
    <br><br>

    <label for="año_fin">Año final de la serie:</label>
    <input type="number" id="año_fin" name="año_fin" value="{{ old('año_fin') }}" min="1900" max="{{ date('Y') }}">
    <br><br>

    <label for="estado">Estado de la serie:</label>
    <input type="text" id="estado" name="estado" value="{{ old('estado') }}" required>
    <br><br>

    <label for="sinopsis">Sinopsis:</label>
    <textarea id="sinopsis" name="sinopsis" required>{{ old('sinopsis') }}</textarea>
    <br><br>

    <label for="genero">Género:</label>
    <select id="genero" name="genero" required>
        <option value="drama" {{ old('genero') == 'drama' ? 'selected' : '' }}>Drama</option>
        <option value="comedia" {{ old('genero') == 'comedia' ? 'selected' : '' }}>Comedia</option>
        <option value="ciencia ficción" {{ old('genero') == 'ciencia ficción' ? 'selected' : '' }}>Ciencia Ficción</option>
        <option value="acción" {{ old('genero') == 'acción' ? 'selected' : '' }}>Acción</option>
        <option value="fantasía" {{ old('genero') == 'fantasía' ? 'selected' : '' }}>Fantasía</option>
    </select>
    <br><br>

    <label for="clasificacion">Clasificación:</label>
    <select id="clasificacion" name="clasificacion" required>
        <option value="AA" {{ old('clasificacion') == 'AA' ? 'selected' : '' }}>AA</option>
        <option value="A" {{ old('clasificacion') == 'A' ? 'selected' : '' }}>A</option>
        <option value="B" {{ old('clasificacion') == 'B' ? 'selected' : '' }}>B</option>
        <option value="B15" {{ old('clasificacion') == 'B15' ? 'selected' : '' }}>B15</option>
        <option value="C" {{ old('clasificacion') == 'C' ? 'selected' : '' }}>C</option>
        <option value="D" {{ old('clasificacion') == 'D' ? 'selected' : '' }}>D</option>
    </select>
    <br><br>

    <label for="idioma">Idioma:</label>
    <input type="text" id="idioma" name="idioma" value="{{ old('idioma') }}" required maxlength="50">
    <br><br>
    
    <label for="temporadas">Temporadas:</label>
    <input type="text" id="temporadas" name="temporadas" value="{{ old('temporadas') }}" required maxlength="50">
    <br><br>

    <label for="capitulos">Capitulos:</label>
    <input type="text" id="capitulos" name="capitulos" value="{{ old('capitulos') }}" required maxlength="50">
    <br><br>

    <label for="poster">Póster de la serie:</label>
    <input type="file" id="poster" name="poster" required>
    <br><br>

    <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk"></i> Guardar</button>
    <a href="{{ route('index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection