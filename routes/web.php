<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ATV 1: Rotas estáticas
Route::get('/sobre', function () {
    return '- Página Sobre -';
});

Route::get('/alunos', function () {
    return '- Lista de Alunos -';
});

Route::get('/contato', function () {
    return '- Página de Contato -';
});