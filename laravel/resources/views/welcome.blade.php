{{-- Extende o main prinicipal --}}
@extends('layouts.main')

{{-- Seta o title na tela principal --}}
@section('title', 'Bagio Laravel')

{{-- Seta o conteudo --}}

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($eventos as $evento)
                <div class="card col-md-3">
                    <img id="img_evento" src="/img/eventos.jpg" alt="{{ $evento->titulo}}">
                    <div class="card-body">
                        <p class="card-date">13/08/2022</p>
                        <h5 class="card-title">{{ $evento->titulo}}</h5>
                        <p class="card-participants"> X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber Mais</a>

                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
