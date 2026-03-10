<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Llamamos a los seeders manuales
        $this->call([
            UsuarioSeeder::class,
            DietaSeeder::class,
        ]);

        // 2. Creamos 5 Administradores aleatorios
        User::factory(5)->create([
            'rol' => 'Administrador',
        ]);

        // 3. Creamos 50 Pacientes aleatorios
        User::factory(50)->create([
            'rol' => 'Paciente',
        ]);
    }
}
