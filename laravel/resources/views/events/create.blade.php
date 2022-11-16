@extends('layouts.main')

@section('title', 'Cadastro de Eventos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu Evento</h1>
        {{--enctype é necessário para enviar arquivo via formulário--}}
        <form action="/events/store" method="POST" enctype="multipart/form-data">
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
            <br>
            <div class="form-group">
                <label for="descricao">Itens de Infraestrutura:</label>
                <div class="form-group">
                    {{--Colocando o [] laravel entende que pode receber mais itens, um json--}}
                    <input type="checkbox" name="items[]" id="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    {{--Colocando o [] laravel entende que pode receber mais itens, um json--}}
                    <input type="checkbox" name="items[]" id="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    {{--Colocando o [] laravel entende que pode receber mais itens, um json--}}
                    <input type="checkbox" name="items[]" id="items[]" value="Cerveja Grátis"> Cerveja Grátis
                </div>
                <div class="form-group">
                    {{--Colocando o [] laravel entende que pode receber mais itens, um json--}}
                    <input type="checkbox" name="items[]" id="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    {{--Colocando o [] laravel entende que pode receber mais itens, um json--}}
                    <input type="checkbox" name="items[]" id="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label><br>
                <input type="file" class="form-control-file" name="imagem" id="imagem"  >
            </div>
            <br>

            <input type="submit" class="btn btn-primary" value="Criar Evento">


        </form>


    </div>
@endsection
