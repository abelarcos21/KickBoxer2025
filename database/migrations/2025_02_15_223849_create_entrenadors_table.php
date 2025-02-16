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
        Schema::create('entrenadors', function (Blueprint $table) {
            $table->id();
            $table->string('curp', 18)->unique();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->year('año_nacimiento');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->enum('genero', ['Masculino', 'Femenino', 'Otro']);
            $table->string('nacionalidad');
            $table->string('domicilio');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('codigo_postal');
            $table->string('estado');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('escolaridad');
            $table->string('grado_kickboxing')->nullable(); // Grado en Kickboxing (puede ser un valor como "Cinturón Negro", "Cinturón Azul", etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrenadors');
    }
};
