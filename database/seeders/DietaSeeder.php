<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dieta;
use App\Models\Nutriologo; // Importante para buscar al nutriólogo

class DietaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscamos al primer nutriólogo que exista en la base de datos
        $nutriologo = Nutriologo::first();

        // Verificamos si existe uno para evitar que el seeder truene
        if ($nutriologo) {
            Dieta::create([
                'nutriologo_id' => $nutriologo->usuario_id,
                'fechaInicio' => '2026-03-01',
                'fechaFin' => '2026-03-31',
                'descripcion' => 'Plan de Definición Muscular - Alto en Proteína'
            ]);

            Dieta::create([
                'nutriologo_id' => $nutriologo->usuario_id,
                'fechaInicio' => '2026-03-01',
                'fechaFin' => '2026-04-01',
                'descripcion' => 'Dieta Keto para Control de Peso'
            ]);

            Dieta::create([
                'nutriologo_id' => $nutriologo->usuario_id,
                'fechaInicio' => '2026-03-05',
                'fechaFin' => '2026-05-05',
                'descripcion' => 'Régimen Vegetariano Balanceado'
            ]);
        }
    }
}