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
    Schema::create('jugadores', function (Blueprint $table) {
        $table->id();
        $table->foreignId('equipo_id')->constrained()->cascadeOnDelete(); // Relación 1:N
        $table->string('nombre');
        $table->string('posicion'); 
        $table->integer('valor_mercado');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
