<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('/sobre', function () {  
    return view('sobre');
})->name('sobre');


Route::get('/agendamento', [AgendamentoController::class, 'create'])
    ->name('agendamento');

Route::post('/agendamento/store', [AgendamentoController::class, 'store'])
    ->name('agendamento.store');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/departments', function () {
    return view('departments');
})->name('departments');

Route::get('/produtos', function () {
    return view('produtos');
})->name('produtos');

Route::get('/devs', function () {
    return view('devs');
})->name('devs');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/gallery', function () {
    return view('gallery');
})->name('galery');


Route::get('/sevice-details', function () {
    return view('service-details');
})->name('services-details');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::post('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/painel-controle', function () {
    return view('painel-controle');
})->name('painel-controle');

Route::get('/login', [AuthController::class, 'index'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.autenticar');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::resource('pets', PetController::class);

// Rota para exibir a view de cadastro
Route::get('/cadastro', [LoginController::class, 'exibirCadastro'])->name('cadastro');

// Rota POST para receber os dados do formulário e salvar no banco
Route::post('/cadastro/salvar', [LoginController::class, 'salvarCadastro'])->name('cadastro.salvar');