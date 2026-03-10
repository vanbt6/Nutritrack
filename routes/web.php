<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// 1. Mostrar la tabla de estudiantes (Tema 10.2)
Route::get('/students', [StudentController::class, 'index'])->name('student.index');

// 2. Formulario para crear (Tema 10.3)
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');

// 3. Guardar el estudiante y la foto (Tema 10.3)
Route::post('/students', [StudentController::class, 'store'])->name('student.store');

// 4. Ver perfil de un estudiante (Tema 10.2)
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.show');

// 5. Eliminar (Tema 10.3)
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student.destroy');