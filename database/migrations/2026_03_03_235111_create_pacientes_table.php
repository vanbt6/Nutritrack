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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->foreignId('usuario_id')->primary()->constrained('users')->onDelete('cascade');
            // Relación con el nutriólogo que lo asesora
            $table->foreignId('nutriologo_id')->constrained('nutriologos', 'usuario_id');
            $table->integer('edad');
            $table->decimal('pesoActual', 8, 2);
            $table->decimal('altura', 8, 2);
            $table->decimal('imc', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
