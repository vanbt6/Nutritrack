<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Nutriologo;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    // 1. Nutriólogo (Pedro) - Creamos usuario y luego su perfil de nutriólogo
    $pedro = User::create([
        'nombre' => 'Pedro Sánchez',
        'rol' => 'Nutriologo',
        'correo' => 'pedro.sanchez@nutripro.com',
        'contrasena' => Hash::make('p3Dr054nchez')
    ]);

    Nutriologo::create([
        'usuario_id' => $pedro->id,
        'cedulaProfesional' => '12345678',
        'especialidad' => 'Deportiva'
    ]);

    // 2. Administrador (Vanessa)
    User::create([
        'nombre' => 'Vanessa Saucedo',
        'rol' => 'Administrador',
        'correo' => 'vanessa@nutripro.com',
        'contrasena' => Hash::make('vane1234')
    ]);

    // 3. Paciente (Lucía)
    User::create([
        'nombre' => 'Lucía Méndez',
        'rol' => 'Paciente',
        'correo' => 'lucia.m@correo.com',
        'contrasena' => Hash::make('lucia123')
    ]);
}
}
