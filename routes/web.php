<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FinancialStateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;

# Rutas protegidas con autenticación
Route::middleware(['auth'])->group(function () {
    
    # Rutas generales para todos los usuarios autenticados
    Route::resource('incomes', IncomeController::class);
    Route::resource('expenses', ExpenseController::class);

    # Ruta para los estados financieros
    Route::get('financial-states', [FinancialStateController::class, 'index'])->name('financial_states.index');

    # Ruta para el dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    # Rutas protegidas solo para SysAdmin y Admin
    Route::middleware(['role:Admin|SysAdmin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('reports', ReportController::class);
    });
});

# Ruta de bienvenida
Route::get('/', function () {
    return redirect()->route('login');
});


# Rutas de autenticación (login, registro, etc.)
Auth::routes();
