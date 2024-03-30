<!-- resources/views/categorias/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Categoría</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $categoria->nombre }}</h5>
                <!-- Puedes mostrar más detalles de la categoría aquí si lo deseas -->
            </div>
        </div>
        <a href="{{ route('categorias.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    </div>
@endsection
