<!-- resources/views/libros/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Libro</h1>

    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}">
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion">{{ $libro->descripcion }}</textarea>
        </div>

        <div>
            <label for="contenido">Contenido:</label>
            <textarea name="contenido" id="contenido">{{ $libro->contenido }}</textarea>
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" value="{{ $libro->fecha }}">
        </div>

        <div>
            <label for="categoria_id">Categoría:</label>
            <select name="categoria_id" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
