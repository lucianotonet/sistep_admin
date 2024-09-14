<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',          // Referência ao objeto Test
        'user_id',          // Referência ao psicólogo
        'patient_id',       // Referência ao paciente
        'application_date', // Data de aplicação
        'responses',        // Respostas fornecidas pelo paciente
        'result',           // Resultado agregado do teste
        'status',           // Status da aplicação
        'access_link',      // Link de acesso
        'qr_code',          // Código QR
    ];

    protected $casts = [
        'responses' => 'array', // Converte respostas para array
        'result' => 'array',     // Converte resultado para array
    ];

    // Definindo a relação com o teste
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    // Definindo a relação com o usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definindo a relação com o paciente
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
