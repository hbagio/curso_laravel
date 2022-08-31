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

        $evento->save();

        return redirect('/');
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
}
