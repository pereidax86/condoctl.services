<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashboardController;

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Autenticación (Login y Logout)
Auth::routes();

// Ruta después del login (Dashboard)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Configuración del sistema (solo para sysadmin)
    Route::middleware(['role:sysadmin'])->group(function () {
        Route::get('/config', [ConfigController::class, 'index'])->name('config.index');
        Route::post('/config', [ConfigController::class, 'update'])->name('config.update');
    });
});
