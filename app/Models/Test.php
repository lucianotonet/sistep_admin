<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Nome do teste
        'description', // Descrição do teste
        'category',    // Categoria(s) do teste
        'format',      // Formato do teste
        'questions',   // Perguntas associadas ao teste
    ];

    protected $casts = [
        'questions' => 'array', // Converte perguntas para array
        'category' => 'array',   // Converte categorias para array
    ];
}
