<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Test;
use App\Models\Patient;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestApplication>
 */
class TestApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'test_id' => Test::factory(), // Referência ao objeto Test
            'patient_id' => Patient::factory(), // Referência ao paciente
            'user_id' => User::factory(), // Referência ao usuário
            'application_date' => $this->faker->dateTimeBetween('-1 year', 'now'), // Data de aplicação
            'responses' => json_encode([]), // Respostas fictícias
            'result' => json_encode([]), // Resultado fictício
            'status' => $this->faker->randomElement(['Pendente', 'Concluído']), // Status da aplicação
            'access_link' => $this->faker->url, // Link de acesso
            'qr_code' => null, // Código QR
        ];
    }
}
