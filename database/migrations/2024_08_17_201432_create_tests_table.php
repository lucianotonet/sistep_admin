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
        Schema::create('tests', function (Blueprint $table) {
            $table->id(); // Identificador único do teste
            $table->string('name'); // Nome do teste
            $table->text('description'); // Descrição do teste
            $table->json('category'); // Categoria(s) do teste
            $table->string('format'); // Formato do teste (e.g., "likert", "multiple_choice", "open_response")
            $table->json('questions'); // Questões do teste
            $table->timestamps(); // Campos de data de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
