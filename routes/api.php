<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TarefaController;
use App\Http\Controllers\Api\AnotacaoController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('anotacaos',AnotacaoController::class);
Route::apiResource('tags',TagController::class);
Route::apiResource('users',UserController::class);
Route::apiResource('tarefas',TarefaController::class);

Route::post('/login', [LoginController::class,'login'])->name('login');

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('users', UserController::class);
    Route::apiResource('anotacaos', AnotacaoController::class)->except(['index','show']);
    Route::apiResource('tags', TagController::class)->except(['index','show']);
    Route::apiResource('tarefa', TarefaController::class)->except(['index','show']);
})
