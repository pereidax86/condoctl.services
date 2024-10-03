<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Mostrar estados financieros solo para SysAdmin y Admin
        if ($user->hasRole('SysAdmin') || $user->hasRole('Admin')) {
            // Obtener los datos financieros
            $totalIncomes = Income::sum('amount');
            $totalExpenses = Expense::sum('amount');
            $balance = $totalIncomes - $totalExpenses;

            return view('dashboard', compact('totalIncomes', 'totalExpenses', 'balance'));
        }

        // Para otros roles, mostrar solo mensaje de bienvenida
        return view('dashboard', ['welcome' => true]);
    }
}
