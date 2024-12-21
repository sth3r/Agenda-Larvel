<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\AnotacaoController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

//TAREFAS
Route::get('tarefas',[TarefaController::class,'index']);
Route::get('tarefa/{id}',[TarefaController::class,'show']);
Route::get('tarefa',[TarefaController::class,'create']);
Route::post('tarefa',[TarefaController::class,'store']);
Route::get('tarefa/{id}/edit',[TarefaController::class,'edit'])->name("tarefaEdit");
Route::post('tarefa/{id}/edit',[TarefaController::class,'update'])->name("tarefaUpdate");
Route::get('tarefa/{id}/delete',[TarefaController::class,'delete'])->name("tarefaDelete");
Route::post('tarefa/{id}/delete',[TarefaController::class,'remove'])->name('tarefaRemove');

//TAGS
Route::get('tags',[TagController::class,'index']);
Route::get('tag/{id}',[TagController::class,'show']);
Route::get('tag',[TagController::class,'create']);
Route::post('tag',[TagController::class,'store']);
Route::get('tag/{id}/edit',[TagController::class,'edit'])->name("tagEdit");
Route::post('tag/{id}/edit',[TagController::class,'update'])->name("tagUpdate");
Route::get('tag/{id}/delete',[TagController::class,'delete'])->name("tagDelete");
Route::post('tag/{id}/delete',[TagController::class,'remove'])->name('tagRemove');

//ANOTACAOS
Route::get('anotacaos',[AnotacaoController::class,'index']);
Route::get('anotacao/{id}',[AnotacaoController::class,'show']);
Route::get('anotacao',[AnotacaoController::class,'create']);
Route::post('anotacao',[AnotacaoController::class,'store']);
Route::get('anotacao/{id}/edit',[AnotacaoController::class,'edit'])->name("anotacaoEdit");
Route::post('anotacao/{id}/edit',[AnotacaoController::class,'update'])->name("anotacaoUpdate");
Route::get('anotacao/{id}/delete',[AnotacaoController::class,'delete'])->name("anotacaoDelete");
Route::post('anotacao/{id}/delete',[AnotacaoController::class,'remove'])->name('anotacaoRemove');

//USERS
Route::get('/users',[UserController::class,'index']);
Route::get('user/{id}',[UserController::class,'show']);
Route::get('user',[UserController::class,'create']);
Route::post('user',[UserController::class,'store']);
Route::get('user/{id}/edit',[UserController::class,'edit'])->name("userEdit");
Route::post('user/{id}/edit',[UserController::class,'update'])->name("userUpdate");
Route::get('user/{id}/delete',[UserController::class,'delete'])->name("userDelete");
Route::post('user/{id}/delete',[UserController::class,'remove'])->name('userRemove');
