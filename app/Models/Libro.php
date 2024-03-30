<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo', // Agrega el campo 'titulo' a la lista de atributos rellenables
        'descripcion',
        'contenido',
        'fecha',
        'categoria_id',
    ];

    // Resto del código del modelo...
}

