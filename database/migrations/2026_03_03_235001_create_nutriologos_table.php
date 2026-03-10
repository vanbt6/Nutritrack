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
        Schema::create('nutriologos', function (Blueprint $table) {
            // La PK es la misma FK de users
            $table->foreignId('usuario_id')->primary()->constrained('users')->onDelete('cascade');
            $table->string('cedulaProfesional');
            $table->string('especialidad');
            $table->string('foto_url')->nullable(); // Campo para la imagen (URL externa)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutriologos');
    }
};
