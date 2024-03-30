<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Bienvenido a la Biblioteca</h1>

    <p>¡Explora nuestra colección de libros!</p>

    <ul>
        <li><a href="{{ route('libros.index') }}">Ver Lista de Libros</a></li>
        <li><a href="{{ route('libros.create') }}">Agregar Nuevo Libro</a></li>
    </ul>
@endsection
