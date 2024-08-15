<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::resource('clientes', ClienteController::class);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contacto', function () {
    return view('contacto');
});
