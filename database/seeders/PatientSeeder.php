<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\User;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar 10 pacientes para cada usuário existente no banco de dados
        User::all()->each(function ($user) {
            Patient::factory()->count(10)->create([
                'user_id' => $user->id, // Associar cada paciente ao usuário existente
            ]);
        });
    }
}
