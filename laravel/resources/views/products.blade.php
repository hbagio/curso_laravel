{{-- Extende o main prinicipal --}}
@extends('layouts.main')

{{-- Seta o title na tela principal --}}
@section('title', 'Produtos')

{{-- Seta o conteudo --}}

@section('content')

    <a href="/">Página Inicial</a>
    <h1>Produtos</h1>
    <br>
    <ol>
        <li>Laravel</li>
        <li>Framwork</li>
        <li>Php</li>
    </ol>

    @if ($busca != '')
        <p>Exibindo busca por {{ $busca }}
        <p>
    @endif

@endsection
