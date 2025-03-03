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
        Schema::create('equipos', function (Blueprint $table) {
                $table->id('equipo_id'); 
                $table->string('nombre_equipo');
                $table->string('deporte');
                $table->date('fecha_apertura');
                $table->integer('integrantes');
                $table->string('genero');
                $table->timestamps();
            });
            
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');

    }
};
