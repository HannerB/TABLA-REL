@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($libros as $item)
                <div class="card mb-3">
                    <div class="card-header">{{$item->fecha->format('d M Y')}}</div>

                    <div class="card-body">
                        <h3>{{$item->titulo}}</h3>
                        <p>Categoría: {{ $item->categoria->nombre }}</p>
                        <p>{{ $item->descripcion }}</p>
                        <div>

                            @foreach ($item->etiquetas as $tag)
                            <span class="badge badge-primary"># {{ $tag->nombre }}</span>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
