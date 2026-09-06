<?php

use Illuminate\Support\Facades\Route;

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

//Atividade 2: Rotas com parâmetros
Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário {$id}";
});