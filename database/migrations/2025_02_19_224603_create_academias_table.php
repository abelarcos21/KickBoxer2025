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
        Schema::create('academias', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');                // Nombre de la academia
            $table->foreignId('asociacion_id')->constrained()->onDelete('cascade');
            $table->string('correo')->unique();      // Correo
            $table->string('calle');                 // Calle
            $table->string('numero_interior')->nullable();  // Número interior
            $table->string('numero_exterior');      // Número exterior
            $table->string('estado');                // Estado
            $table->string('colonia');               // Colonia
            $table->string('municipio');             // Municipio
            $table->string('codigo_postal');         // Código postal
            $table->string('telefono');              // Teléfono
            $table->string('link_web_red_social')->nullable(); // Link web o red social
            $table->string('link_google_maps')->nullable();    // Link Google Maps
            $table->timestamps();

            //$table->integer('asociacion_id')->unsigned();
            //$table->foreign('asociacion_id')->references('id')->on('asociacions')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academias');
    }
};
