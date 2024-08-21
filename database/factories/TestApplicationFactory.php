<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'test_id' => $this->faker->uuid, // Referência ao objeto Test
            'psychologist_id' => $this->faker->uuid, // Referência ao psicólogo
            'patient_id' => $this->faker->uuid, // Referência ao paciente
            'application_date' => $this->faker->dateTime, // Data de aplicação
            'responses' => $this->faker->randomElements([
                ['question_id' => 1, 'answer' => $this->faker->randomDigit],
                ['question_id' => 2, 'answer' => $this->faker->randomDigit],
                // Adicione mais respostas conforme necessário
            ], 2), // Respostas fornecidas pelo paciente
            'result' => [
                'depression' => $this->faker->numberBetween(0, 20), // Resultado de depressão
                'anxiety' => $this->faker->numberBetween(0, 20), // Resultado de ansiedade
                'stress' => $this->faker->numberBetween(0, 20), // Resultado de estresse
            ],
            'status' => $this->faker->randomElement(['Pendente', 'Iniciado', 'Concluído']), // Status da aplicação
            'access_link' => $this->faker->url, // Link de acesso
            'qr_code' => null, // Código QR
        ];
    }
}
