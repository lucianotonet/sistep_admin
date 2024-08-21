<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->optional()->name, // Nome completo do paciente (opcional para testes anônimos)
            'email' => $this->faker->optional()->safeEmail, // Email do paciente (opcional)
            'phone' => $this->faker->optional()->phoneNumber, // Telefone do paciente (opcional)
            'age' => $this->faker->optional()->numberBetween(1, 100), // Idade do paciente (opcional)
            'gender' => $this->faker->optional()->randomElement(['masculino', 'feminino', null]), // Sexo do paciente (opcional)
            'is_anonymous' => $this->faker->boolean(50), // Indica se o paciente é anônimo
        ];
    }
}
