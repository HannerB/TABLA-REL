<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;

Route::get('/', function () {
    $libros = Libro::all();
    return view('welcome', compact('libros'));
});
