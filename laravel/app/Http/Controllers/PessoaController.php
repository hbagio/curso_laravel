<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 //Usa o modelo do Pessoa
use App\Models\Pessoa;

class PessoaController extends Controller
{

    public function pessoa()
    {
        $pessoas = Pessoa::all();

        return view('events.pessoa', ['pessoas' => $pessoas ]);
    }


    public function store(Request $request)
    {
        //Criando uma nova classe instanciado o modelo Pessoa
        $pessoa = new Pessoa;

        $pessoa->nome = $request->nomePessoa;
        $pessoa->email = $request->email;

        $pessoa->save();

        return redirect('events/pessoa');

    }



}
