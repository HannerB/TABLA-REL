<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $dates = ['fecha'];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
