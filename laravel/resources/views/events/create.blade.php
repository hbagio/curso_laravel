@extends('layouts.main')

@section('title', 'Sobre a Pagina')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu Evento</h1>
        <form action="/events/store" method="POST">
            {{--Diretiva necessário por segurança, senão não deixar fazer o request--}}
            @csrf
            <div class="form-group">
                <label for="titulo">Evento:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nome de Evento">
            </div>
            <div class="form-group">
                <label for="cidade">Local do Evento:</label>
                <input type="text" class="form-control"name="cidade" id="cidade" placeholder="Local de Evento">
            </div>

            <div class="form-group">
                <label for="privado">Evento Privado:</label>
                <select class="form-control" name="privado" id="privado">
                    <option value="0">Não</option>
                    <option value="0">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição de Evento"></textarea>
            </div>


            <input type="submit" class="btn btn-primary" value="Criar Evento">


        </form>


    </div>
@endsection
