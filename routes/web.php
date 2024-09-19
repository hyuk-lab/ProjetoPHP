<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Rotas de cadastro de usuario
Route::get('/cadastro_usuario', [UserController::class,"formCriarUsuario"]);

Route::get('/listar_usuario', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);


//Criando rotas para cliente

// /cadastro_cliente para entrar no form no navegador;
Route::get('/cadastro_cliente', [ClienteController::class,"formCliente"]);

// listar os clientes cadastrados;
Route::get('/listar_cliente', [ClienteController::class, 'listar']);

// retonar o formulário que será redirecionado a função criar no Controller;
Route::post('/criar_cliente', [ClienteController::class, 'criar']);



//Criando rotas para vendedor

