<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cadastrar', [\App\Http\Controllers\cadastrarUsuario::class,'index']);
Route::get('/cadastrar/salvar',[\App\Http\Controllers\cadastrarUsuario::class, 'store']);
Route::get('/consultar',[\App\http\Controllers\consultarUsuario::class,'consultar']);
Route::get('/agenda',[\App\Http\Controllers\tarefaUsuario::class,'index']);
Route::post('agenda',[\App\Http\Controllers\tarefaUsuario::class,'store']);
Route::get('/editar/{id}', [\App\Http\Controllers\cadastrarUsuario::class, 'editar']);
Route::get('/atualizar/{id}', [\App\Http\Controllers\cadastrarUsuario::class, 'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\cadastrarUsuario::class, 'excluir']);