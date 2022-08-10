<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $nome = "Hueliton Luis Bagio";
        $idade = 32;
        $arrNomes = ["Dora","Mel","Jady","Sindy"];

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'Programador',
                'arrNomes' => $arrNomes
            ]);
    }


public function create(){

    return view('events.create');
}

public function sobre(){
    return view('sobre');
}

public function listaEvents(){
    return view('events.listaEvents');
}

public function login(){
    return view('events.login');
}

public function usuCadastro(){
    return view('events/usuCadastro');
}

}
