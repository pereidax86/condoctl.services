<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FinancialReportExport;

class FinancialStateController extends Controller
{
    public function index(Request $request)
    {
        // Filtrar por fecha si se proporcionan fechas de inicio y fin
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $incomesQuery = Income::query();
        $expensesQuery = Expense::query();

        if ($startDate && $endDate) {
            $incomesQuery->whereBetween('date', [$startDate, $endDate]);
            $expensesQuery->whereBetween('date', [$startDate, $endDate]);
        }

        // Calcular totales
        $totalIncomes = $incomesQuery->sum('amount');
        $totalExpenses = $expensesQuery->sum('amount');
        $balance = $totalIncomes - $totalExpenses;

        // Obtener detalles de ingresos y egresos
        $incomes = $incomesQuery->get();
        $expenses = $expensesQuery->get();

        return view('financial_states.index', compact('totalIncomes', 'totalExpenses', 'balance', 'incomes', 'expenses', 'startDate', 'endDate'));
    }

    public function exportPDF(Request $request)
    {
        $incomes = Income::all();
        $expenses = Expense::all();
        $totalIncomes = $incomes->sum('amount');
        $totalExpenses = $expenses->sum('amount');
        $balance = $totalIncomes - $totalExpenses;
    
        $pdf = PDF::loadView('financial_states.pdf', compact('incomes', 'expenses', 'totalIncomes', 'totalExpenses', 'balance'));
        return $pdf->download('financial_report.pdf');
    }
    
    public function exportCSV(Request $request)
    {
        return Excel::download(new FinancialReportExport, 'financial_report.csv');
    }    

}




