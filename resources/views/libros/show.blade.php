<!-- resources/views/libros/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalles del Libro</h1>

    <div>
        <p><strong>Título:</strong> {{ $libro->titulo }}</p>
        <p><strong>Descripción:</strong> {{ $libro->descripcion }}</p>
        <p><strong>Contenido:</strong> {{ $libro->contenido }}</p>
        <p><strong>Fecha:</strong> {{ $libro->fecha }}</p>
        <p><strong>Categoría:</strong> {{ $libro->categoria->nombre }}</p>
    </div>

    <div>
        <a href="{{ route('libros.index') }}">Volver a la Lista de Libros</a>
    </div>
@endsection
