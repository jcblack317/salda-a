@extends('/layouts.unica')
@section('titulo')
    Series
@endsection
@section('info')

<div>
    @if (session('mensaje'))
        <div class="alert alert-danger" id="mensaje">
            {{ session('mensaje') }}
        </div>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mensaje = document.getElementById('mensaje');
            if (mensaje) {
                setTimeout(() => {
                    mensaje.remove();
                }, 2000);
            }
        });
    </script>
</div>

<h1 class="text-center">Series</h1>
<div class="text-center">
    <a href="{{route('agregar_serie')}}">
        <button type="button" class="btn btn-primary">Agregar Serie</button>
    </a>
</div>
<br>
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