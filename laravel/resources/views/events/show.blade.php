@extends('layouts.main')

@section('title', $evento->titulo)

@section('content')


    <div class="col-md-10 offset-md-1">
        <div class="row">

            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $evento->imagem }}" class="img-fluid" alt="{{ $evento->title }}">

            </div>
            <div id="info-container" class="col-md-6">

                <h1>{{ $evento->titulo }}</h1>

                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon>
                    {{ $evento->cidade }}
                </p>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon>
                    {{ $evento->descricao }}
                </p>

                <p class="event-participants">
                    <ion-icon name="people-outline"></ion-icon>
                    X participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="people-outline"></ion-icon>
                    Dono do Evento
                </p>
                <p>O evento conta com os seguintes itens:</p>
                <ul id="items-list">
                    @foreach ($evento->items as $item )
                        <li><ion-icon name="play-outline"></ion-icon><span> {{$item}}</span></li>
                    @endforeach
                </ul>

                <br>
                <br>
                <a class="btn btn-outline-dark btn-lg" href="/" role="button"> <i class="fa-solid fa-pen"></i> Voltar</a>
                <a class="btn btn-outline-dark btn-lg" href="/" target="_blank" role="button"> <i class="fa-solid fa-pen"></i> Confirmar Presença</a>



            </div>

        </div>

    </div>



@endsection
