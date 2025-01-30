<?php

use Illuminate\Support\Facades\Route;

/*
Rotas são as URL's liberadas para acesso.
*/

Route::get('/', function () {
    return view('index');
});

#rota para o cadastro de projetos
Route::get('/portfolio',function(){
    return view('paginas.cadastra_portfolio');
});

