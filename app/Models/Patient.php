<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Referência ao usuário associado
        'name',    // Nome completo do paciente
        'email',   // Email do paciente
        'phone',   // Telefone do paciente
        'age',     // Idade do paciente
        'gender',     // Sexo do paciente
        'is_anonymous', // Adicione este campo
    ];

    // Definindo a relação com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definindo a relação com o modelo TestApplication
    public function testApplications()
    {
        return $this->hasMany(TestApplication::class);
    }
}
