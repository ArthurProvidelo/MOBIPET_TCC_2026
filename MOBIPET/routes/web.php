<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('/sobre', function () {  
    return view('sobre');
})->name('sobre');


Route::get('/agendamento', function () {
    return view('agendamento');
})->name('agendamento');

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

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/painel-controle', function () {
    return view('painel-controle');
})->name('painel-controle');