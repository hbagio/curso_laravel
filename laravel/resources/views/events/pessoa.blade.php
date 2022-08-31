@extends('layouts.main')

@section('title', 'Sobre a Pagina')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastre uma Pesso</h1>
        <form action="/events/cadastroPessoa" method="POST">
            {{--Diretiva necessário por segurança, senão não deixar fazer o request--}}
            @csrf
            <div class="form-group">
                <label for="titulo">Nome:</label>
                <input type="text" class="form-control" name="nomePessoa" id="nomePessoa" placeholder="Nome da Pessoa">
            </div>
            <div class="form-group">
                <label for="cidade">Email:</label>
                <input type="email" class="form-control"name="email" id="email" placeholder="Email">
            </div>



            <br>
            <input type="submit" class="btn btn-primary" value="Cadastrar">

            @foreach($pessoas as $pessoa )

                <p> {{$pessoa->nome}} / {{$pessoa->email}}</p>

            @endforeach


        </form>


    </div>
@endsection
