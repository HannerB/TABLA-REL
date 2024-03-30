<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria; // Agregamos el modelo Categoria

class LibroController extends Controller
{
    /**
     * Muestra una lista de libros.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Muestra el formulario para crear un nuevo libro.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categorias = Categoria::all(); // Obtenemos todas las categorias
        return view('libros.create', compact('categorias'));
    }

    /**
     * Almacena un libro recién creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'contenido' => 'required|string',
        'fecha' => 'nullable|date',
        'categoria_id' => 'required|exists:categorias,id',
    ]);

    $libro = new Libro();
    $libro->fill($request->except('_token')); // Excluir el campo _token
    $libro->save();

    return redirect()->route('libros.index')
        ->with('success', 'Libro creado exitosamente.');
}


    /**
     * Muestra el libro especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    /**
     * Muestra el formulario para editar el libro especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }

    /**
     * Actualiza el libro especificado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'contenido' => 'required|string',
            'fecha' => 'nullable|date',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado exitosamente.');
    }

    /**
     * Elimina el libro especificado de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado exitosamente.');
    }
}
