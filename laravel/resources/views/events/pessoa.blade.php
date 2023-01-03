@extends('layouts.main')

@section('title', 'Sobre a Pagina')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastre uma Pessoa</h1>
        <form action="/events/cadastroPessoa" method="POST">
            {{-- Diretiva necessário por segurança, senão não deixar fazer o request --}}
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
            <br>
            <table class="table">
                
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @foreach ($pessoas as $pessoa)
                <tr>
                <td> {{ $pessoa->id }} </td>
                <td> {{ $pessoa->nome }} </td>
                <td> {{ $pessoa->email }}</td>
                <td><a class="btn btn-warning btn-sm" href="editarCategoria.php?id={{ $pessoa->id }}" role="button"><i class="fa-solid fa-pen"></i> Editar</a></td>';
                <td><a class="btn btn-warning btn-sm" href="excluirCategoria.php?id={{ $pessoa->id }}" role="button"><i class="fa-solid fa-pen"></i> Excluir</a></td>
                </tr>
            @endforeach

        </table>
        </form>


    </div>
@endsection
