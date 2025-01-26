<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashboardController;

// Redirigir la raíz '/' según el estado de autenticación
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard') // Usuario autenticado: al dashboard
        : redirect()->route('login');   // Usuario no autenticado: al login
});

// Autenticación (Login y Logout)
Auth::routes();

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Configuración del sistema (solo accesible por sysadmin)
    Route::middleware(['role:sysadmin'])->group(function () {
        Route::get('/config', [ConfigController::class, 'index'])->name('config.index');
        Route::post('/config', [ConfigController::class, 'update'])->name('config.update');
    });
});
