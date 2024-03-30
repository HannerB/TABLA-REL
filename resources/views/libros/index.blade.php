<!-- resources/views/libros/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Libros</h1>
    
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->descripcion }}</td>
                    <td>
                        <a href="{{ route('libros.show', $libro->id) }}">Ver</a>
                        <a href="{{ route('libros.edit', $libro->id) }}">Editar</a>
                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('libros.create') }}">Agregar Libro</a>
@endsection
