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
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('poster')->nullable();//url o nombre del archivo
            $table->date('fecha');
            $table->datetime('fin_registro')->nullable();
            $table->string('nombre_torneo');
            $table->enum('estado_registro', ['ABIERTO', 'CERRADO'])->default('CERRADO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
