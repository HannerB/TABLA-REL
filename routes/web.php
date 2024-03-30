<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Models\Libro;

Route::get('/', function () {
    $libros = Libro::all();
    return view('welcome', compact('libros'));
});

Route::resource('libros', LibroController::class);

