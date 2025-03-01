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
        Schema::create('afiliacions', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->unique();
            $table->date('fecha_solicitud');
            $table->string('nombre_solicitante');
            $table->char('curp', 18)->unique();
            $table->char('sexo', 1);
            $table->date('fecha_nacimiento');
            $table->string('telefono_movil', 10);
            $table->string('email');
            $table->string('nombre_escuela');
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->string('municipio');
            $table->char('codigo_postal', 5);
            $table->string('red_social')->nullable();
            $table->boolean('aviso_privacidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('afiliacions');
    }
};
