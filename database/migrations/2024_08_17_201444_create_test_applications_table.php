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
        Schema::create('test_applications', function (Blueprint $table) {
            $table->id(); // Identificador único da aplicação do teste
            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade'); // Referência ao teste aplicado
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Referência ao psicólogo que aplicou o teste
            $table->foreignId('patient_id')->nullable()->constrained('patients')->onDelete('set null'); // Permite que o patient_id seja nulo
            $table->timestamp('application_date')->nullable(); // Data e hora da aplicação do teste
            $table->json('responses')->nullable(); // Respostas fornecidas pelo paciente
            $table->json('result')->nullable(); // Resultado agregado do teste
            $table->string('status')->nullable(); // Status da aplicação do teste
            $table->string('access_link')->nullable(); // Link de acesso ao teste
            $table->text('qr_code')->nullable(); // Código QR gerado para acesso rápido ao teste
            $table->timestamps(); // Campos de data de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_applications');
    }
};
