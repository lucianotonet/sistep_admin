<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create([
            'user_type' => 'psychologist',
            // 'crp' => fake()->randomNumber(),
            'institution' => null,
        ]);

        User::factory(10)->create([
            'user_type' => 'student',
            'crp' => null,
            // 'institution' => fake()->company(),
        ]);
        
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => true,
            'crp' => null,
            'institution' => null,        
        ]);

        $this->call([
            PatientSeeder::class,
            TestSeeder::class,
            TestApplicationSeeder::class, // Adicione esta linha
        ]);
    }
}
