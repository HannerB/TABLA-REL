<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bienvenido a la Biblioteca</h1>
        <p>¡Explora nuestra colección de libros!</p>
        <ul>
            <li><a href="{{ route('libros.index') }}">Ver Lista de Libros</a></li>
            <li><a href="{{ route('libros.create') }}">Agregar Nuevo Libro</a></li>
        </ul>
        <hr>
        <p>También puedes acceder al CRUD de Categorías:</p>
        <ul>
            <li><a href="{{ route('categorias.index') }}">Ver Lista de Categorías</a></li>
            <li><a href="{{ route('categorias.create') }}">Agregar Nueva Categoría</a></li>
        </ul>
    </div>
@endsection
