<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etiqueta_libro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('libro_id'); // Relación con libros
            $table->foreign('libro_id')->references('id')->on('libros'); // clave foranea
            $table->unsignedBigInteger('etiqueta_id'); // Relación con etiquetas
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas'); // clave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_libro');
    }
};
