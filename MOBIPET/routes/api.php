<?php

use App\Http\Controllers\Api\AgendamentoController;
use App\Http\Controllers\Api\AtendimentoController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Autenticação do app mobile (cliente), via token Sanctum.
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/esqueci-senha', [AuthController::class, 'forgotPassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::put('/perfil', [AuthController::class, 'updateProfile']);
    Route::put('/senha', [AuthController::class, 'changePassword']);

    Route::get('/pets', [PetController::class, 'index']);
    Route::post('/pets', [PetController::class, 'store']);
    Route::get('/pets/{id}', [PetController::class, 'show']);
    Route::put('/pets/{id}', [PetController::class, 'update']);
    Route::delete('/pets/{id}', [PetController::class, 'destroy']);
    Route::get('/pets/{id}/atendimento-atual', [PetController::class, 'atendimentoAtual']);

    Route::get('/servicos', [ServicoController::class, 'index']);
    Route::get('/funcionarios', [FuncionarioController::class, 'index']);

    Route::get('/agendamentos', [AgendamentoController::class, 'index']);
    Route::get('/clientes/{id}/agendamentos', [AgendamentoController::class, 'porCliente']);
    Route::post('/agendamentos', [AgendamentoController::class, 'store']);
    Route::patch('/agendamentos/{id}/cancelar', [AgendamentoController::class, 'cancelar']);

    Route::get('/atendimentos/atual', [AtendimentoController::class, 'atual']);
    Route::post('/atendimentos', [AtendimentoController::class, 'store']);
    Route::post('/atendimentos/{id}/avancar', [AtendimentoController::class, 'avancar']);
});
