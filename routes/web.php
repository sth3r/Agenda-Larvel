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

// Route::get('/au', function () {
//     echo 'auuuu';
// });
// Route::get('/au',[TarefaController::class,'index']);

Route::get('tarefas',[TarefaController::class,'index']);
Route::get('tarefa/{id}',[TarefaController::class,'show']);


Route::get('tags',[TagController::class,'index']);
Route::get('tag/{id}',[TagController::class,'show']);


Route::get('anotacaos',[AnotacaoController::class,'index']);
Route::get('anotacao/{id}',[AnotacaoController::class,'show']);

// Route::get('anotacaos',[AnotacaoController::class,'index']);
// Route::get('anotacao/{id}',[AnotacaoController::class,'show']);
Route::get('anotacao',[AnotacaoController::class,'create']);
Route::post('anotacao',[AnotacaoController::class,'store']);
Route::get('anotacao/{id}/edit',[AnotacaoController::class,'edit'])->name("anotacaoEdit");
Route::post('anotacao/{id}/edit',[AnotacaoController::class,'update'])->name("anotacaoUpdate");
Route::get('anotacao/{id}/delete',[AnotacaoController::class,'delete'])->name("anotacaoDelete");
Route::post('anotacao/{id}/delete',[AnotacaoController::class,'remove'])->name('remove');


Route::get('/users',[UserController::class,'index']);
