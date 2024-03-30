<!-- resources/views/libros/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Libro</h1>

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf

        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
        </div>

        <div>
            <label for="contenido">Contenido:</label>
            <textarea name="contenido" id="contenido">{{ old('contenido') }}</textarea>
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}">
        </div>

        <div>
            <label for="categoria_id">Categoría:</label>
            <select name="categoria_id" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Crear Libro</button>
    </form>
@endsection
