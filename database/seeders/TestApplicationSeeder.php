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
        foreach (User::all() as $user) {
            $patient = $user->patients()->inRandomOrder()->first();
            foreach (Test::all() as $test) {
                TestApplication::factory(rand(0, 10))->create([
                    'user_id' => $user->id,
                    'patient_id' => $patient->id,
                    'test_id' => $test->id,
                ]);
            }
        }
    }
}
