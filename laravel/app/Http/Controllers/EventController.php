<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Usa o modelo do Evento
use App\Models\Evento;

class EventController extends Controller
{
    public function index()
    {
        // Retorna todos os registros
        $eventos = Evento::all();

        //Retorna para View as informações
        return view('welcome', ['eventos' => $eventos]);
    }

    public function store(Request $request)
    {
        $evento = new Evento;

        $evento->titulo = $request->titulo;
        $evento->cidade = $request->cidade;
        $evento->privado = $request->privado;
        $evento->descricao = $request->descricao;
        //Vem uma string de itens e precisa transformar um array, isto será feito no model
        $evento->items = $request->items;
        //Upload controle
        //Verifica se tem uma imagem da requisição e se ela é valida
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImage = $request->imagem;

            $extensao = $requestImage->extension();

            $imagemNome = md5($requestImage->getClientOriginalName(). strtotime("now")).".".$extensao;


            $request->imagem->move(public_path('img/events'),$imagemNome);

            $evento->imagem = $imagemNome;



        }

        $evento->save();

        return redirect('/')->with('msg','Evento Criado com Sucesso!');
    }

    public function create()
    {

        return view('events.create');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function listaEvents()
    {
        return view('events.listaEvents');
    }

    public function login()
    {
        return view('events.login');
    }

    public function usuCadastro()
    {
        return view('events/usuCadastro');
    }

    public function show($id){
        /* Ele é um método bem útil para tratarmos os resultados de Rotas ou Controllers que necessitam do resultado desta busca para funcionar*/
        /*Resgata a view*/
        $evento = Evento::findOrFail($id);

        return view('events.show', ['evento' => $evento]);



    }
}
