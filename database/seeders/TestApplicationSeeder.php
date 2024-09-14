<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestApplication;
use App\Models\Test;
use App\Models\Patient;
use App\Models\User; // Assuming User model is defined in App\Models

class TestApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar aplicações de teste com dados fictícios
        TestApplication::factory()->count(10)->create([
            'user_id' => User::factory(), // Associar a um usuário fictício
        ]);
    }
}
