<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\EventController;
use App\Http\Controllers\PessoaController;

Route::get('/',[EventController::class, 'index']);

Route::get('/events/create',[EventController::class, 'create']);

Route::get('/events/listaEvents',[EventController::class, 'listaEvents']);
Route::get('/sobre',[EventController::class, 'sobre']);
Route::get('events/login',[EventController::class, 'login']);
Route::get('events/usuCadastro',[EventController::class, 'usuCadastro']);
Route::get('events/pessoa',[PessoaController::class, 'pessoa']);
Route::get('events/listaPessoa',[PessoaController::class, 'listaPessoa']);


Route::post('/events/store',[EventController::class,'store']);
Route::post('/events/cadastroPessoa',[PessoaController::class,'store']);





Route::get('/produtos', function () {

    $busca = request('search');

    return view('products',['busca' =>  $busca]);
});


Route::get('/nova', function () {
    return view('newPagina');
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product',['id' => $id]);
});
