<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Adicione um nome fictício
            'description' => $this->faker->paragraph, // Adicione uma descrição fictícia
            'category' => json_encode(['exemplo']), // Adicione uma categoria fictícia
            'format' => 'likert', // Defina um formato padrão
            'questions' => json_encode([]), // Adicione perguntas fictícias
        ];
    }
}
