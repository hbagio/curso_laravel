{{-- Extende o main prinicipal --}}
@extends('layouts.main')

{{-- Seta o title na tela principal--}}
@section('title','Bagio Laravel')

{{-- Seta o conteudo--}}

@section('content')

<h1>Primeiro Projeto Laravel</h1>
<img src="/img/eventos.jpg" alt="Banner">
<br><br><br>
<p>Meu nome é {{ $nome }}, tenho {{ $idade }} e trabalho como {{ $profissao }}</p>


{{-- Assim é comentário no Blade laravel --}}
{{-- Assim é o for com Blade --}}

@foreach ($arrNomes as $nomes)
    <p>Array na posição {{ $loop->index }} o nome é {{ $nomes }}</p>
@endforeach

@endsection
