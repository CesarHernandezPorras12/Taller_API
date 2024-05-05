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
        Schema::create('tv', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('tamaño');
            $table->string('peso');
            $table->string('color');
            $table->string('tipo_pantalla');
            $table->boolean('bluetooth'); // Si bluetooth es un booleano
            $table->string('pais_fabricacion');
            $table->date('fecha_importacion'); //  tipo de fecha.
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tv');
    }
};
