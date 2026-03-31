<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('404', function () {
    return view('404');
});

// mudar estas rotas de acordo com os nomes dos aqruivos
// DAQUI PARA BAIXO
Route::get('/sobre', function () {  
    return view('sobre');
})->name('sobre');


Route::get('/agendamento', function () {
    return view('agendamento');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/department', function () {
    return view('department');
});

Route::get('/department-details', function () {
    return view('department-details');
});

Route::get('/devs', function () {
    return view('devs');

});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/sevice-details', function () {
    return view('service-details');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/starter-page', function () {
    return view('starter-page');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

