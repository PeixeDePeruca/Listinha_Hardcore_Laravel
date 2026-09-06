<?php

use Illuminate\Support\Facades\Route;
use App\Models\Aluno;


Route::get('/', function () {
    return view('welcome');
});


// Atividade 1: Rotas estáticas
Route::get('/sobre', function () {
    return '- Página Sobre -';
});

Route::get('/alunos', function () {
    return '- Lista de Alunos -';
});

Route::get('/contato', function () {
    return '- Página de Contato -';
});

//Rotas com parâmetros
Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário {$id}";
});


//Consultas Eloquent
Route::get('/consultas-alunos', function () {
    //1-alunos de determinado curso
    $porCurso = Aluno::where('curso', 'Engenharia')->get();

    //2-alunos cujo nome contém determinada palavra
    $porNome = Aluno::where('nome', 'like', '%Silva%')->get();

    //3-alunos cadastrados nos últimos 7 dias
    $recentes = Aluno::where('created_at', '>=', now()->subDays(7))->get();

    //4-Quant. de alunos
    $total = Aluno::count();



    return response()->json([
        'por_curso' => $porCurso,
        'por_nome' => $porNome,
        'recentes' => $recentes,
        'total' => $total,
    ]);
});