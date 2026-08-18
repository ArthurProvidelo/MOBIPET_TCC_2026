<?php

// Web Routes -> Importação das controllers necessários
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\GoogleFuncionarioController;

Route::get('/pets/atualizar-tabela', 
[PetController::class, 'atualizarTabela'])
    ->name('pets.atualizarTabela');

Route::get('/', function () {
    return view('index');
})->name('index');

// Rota para a página de erro 404
Route::get('404', function () {
    return view('404');
})->name('404');

// Rota para a página de sobre
Route::get('/sobre', function () {  
    return view('sobre');
})->name('sobre');

// Rota para processar o formulário de cadastro de funcionário
Route::post('/funcionario/salvar', [FuncionarioController::class, 'store'])
    ->name('funcionario.salvar');

// Rota para exibir a página de agendamento
Route::get('/agendamento', [AgendamentoController::class, 'create'])
    ->name('agendamento');

// Rota para processar o formulário de agendamento
Route::post('/agendamento/store', [AgendamentoController::class, 'store'])
    ->name('agendamento.store');

// Rota para exibir a página de cadastro de funcionários
Route::get('/funcionario', function () {
    return view('auth.funcionario');
})->name('funcionario');

// Rota para exibir a página de desenvolvedores
Route::get('/devs', function () {
    return view('devs');
})->name('devs');

// Rota para exibir a página de FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Rota para exibir a página de serviços
Route::get('/services', function () {
    return view('services');
})->name('services');

// Rota para exibir o perfil do cliente
Route::get('/perfil', [ClienteController::class, 'perfil'])
    ->name('perfil');

// Rota para atualizar o perfil do cliente
Route::put('/perfil', [ClienteController::class, 'updatePerfil'])
    ->name('perfil.update');

Route::put('/perfil-update/{id}', [FuncionarioController::class, 'update'])
    ->name('funcionario.update');


// Rota para o painel de controle do funcionário
Route::get('/painel-controle', [PainelController::class, 'index'])
    ->name('painel-controle');

// Rotas de autenticação
Route::get('/login', [AuthController::class, 'index'])
    ->name('login');


// Rotas de funcionários

// Rota para exibir a página de login do funcionário
Route::get('/login/funcionario', [AuthController::class, 'indexFuncionario'])
    ->name('login.funcionario');

// Rota para processar o login do cliente
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.autenticar');

// Rota para processar o login do funcionário
Route::post('/login-funcionario', [AuthController::class, 'loginFuncionario'])
    ->name('login.autenticarFuncionario');

// Rota para exibir a agenda do funcionário (mês > dia > agendamentos)
Route::get('/funcionario/agendamentos', [AgendamentoController::class, 'agendamentosFuncionario'])
    ->name('funcionario.agendamentos');

// rota para atualizar status na tela de agendamento
Route::patch('/agendamentos/{agendamento}/status', [AgendamentoController::class, 'atualizarStatus'])
    ->name('agendamentos.atualizarStatus');

// Rota para logout (tanto para clientes quanto para funcionários)
Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// Rotas para CRUD de Pets
Route::resource('pets', PetController::class);


// Rota para exibir a view de cadastro
Route::get('/cadastro', [LoginController::class, 'exibirCadastro'])
    ->name('cadastro');

// Rota POST para receber os dados do formulário e salvar no banco
Route::post('/cadastro/salvar', [LoginController::class, 'salvarCadastro'])
    ->name('cadastro.salvar');

// Rota que renderiza o formulário HTML (Método GET)
Route::get('/servicos/cadastrar', [ServicoController::class, 'create'])
    ->name('services.create');

// Rota que processa os dados e salva no banco (Método POST)
Route::post('/servicos/salvar', [ServicoController::class, 'store'])
    ->name('services.store');

// Google
Route::get('/auth/google', [GoogleController::class, 'redirect'])
->name('google.login');

Route::get('/auth/google/callback', [GoogleController::class, 'callback'])
    ->name('google.callback');

// Google Funcionario
Route::get('/auth/googleFuncionario', [GoogleFuncionarioController::class, 'redirect'])
->name('google.loginFuncionario');

Route::get('/auth/google/callbackFuncionario', [GoogleFuncionarioController::class, 'callbackFuncionario'])
    ->name('google.callbackFuncionario');

