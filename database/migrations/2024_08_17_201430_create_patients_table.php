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
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); // Identificador único do paciente
            $table->foreignId('user_id')->nullable()->constrained('users'); // Referência ao usuário associado, pode ser nulo para pacientes anônimos
            $table->string('name')->nullable(); // Nome pode ser nulo para pacientes anônimos
            $table->string('email')->nullable(); // Email pode ser nulo para pacientes anônimos
            $table->string('phone')->nullable(); // Telefone pode ser nulo para pacientes anônimos
            $table->integer('age')->nullable(); // Idade do paciente
            $table->string('gender', 10)->nullable(); // Sexo do paciente
            $table->boolean('is_anonymous')->default(false); // Indica se o paciente é anônimo
            $table->timestamps(); // Campos de data de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
