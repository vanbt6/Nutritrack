<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use App\Http\Controllers\NutriologoController;
Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::resource('nutriologos', NutriologoController::class);

