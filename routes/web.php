<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tarefa;


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

Route::get('/', function(){
    return view('dashboard');
});

Route::get('/inicio', function(){
    return view('welcome');
});

Route::post('/cadastrar-tarefa', function(Request $informacoes){
    Tarefa::create([
        'titulo' => $informacoes->titulo_tarefa, 
        'descricao' => $informacoes->descricao_tarefa, 
        'data' => $informacoes->data_tarefa
    ]);
    echo "Tarefa Cadastrada com Sucesso!";
});

Route::get('/mostrar-tarefa/{id_da_tarefa}', function($id_da_tarefa){
    $tarefa = Tarefa::findOrFail($id_da_tarefa);
    echo "Título: ", $tarefa->titulo;
    echo "<br/>";
    echo "Descrição: ", $tarefa->descricao;
    echo "<br/>";
    echo "Data: ", $tarefa->data;
    
});

Route::get('/editar-tarefa/{id_da_tarefa}', function($id_da_tarefa){
    $tarefa = Tarefa::findOrFail($id_da_tarefa);
     return view('editar_tarefa', ['tarefa' => $tarefa]); 
});

Route::put('/atualizar-tarefa/{id_da_tarefa}', function(Request $informacoes, $id_da_tarefa){
    $tarefa = Tarefa::findOrFail($id_da_tarefa);
    $tarefa->titulo = $informacoes->titulo_tarefa;
    $tarefa->descricao = $informacoes->descricao_tarefa;
    $tarefa->data = $informacoes->data_tarefa;
    $tarefa->save();
    echo "Tarefa Atualizada com Sucesso";
});

Route::get('/excluir-tarefa/{id_da_tarefa}', function($id_da_tarefa){
    $tarefa = Tarefa::findOrFail($id_da_tarefa);
    $tarefa->delete();
    echo "Tarefa Excluída com Sucesso";
});