<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportExport;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function generate(Request $request)
    {
        // Filtrar por tipo de transacción (ingreso o egreso)
        $type = $request->input('type');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Filtrar y obtener los datos según el tipo de transacción
        if ($type == 'income') {
            $transactions = Income::query();
        } elseif ($type == 'expense') {
            $transactions = Expense::query();
        } else {
            $transactions = Income::query()->union(Expense::query());
        }

        if ($startDate && $endDate) {
            $transactions->whereBetween('date', [$startDate, $endDate]);
        }

        $transactions = $transactions->get();

        return view('reports.results', compact('transactions', 'type', 'startDate', 'endDate'));
    }

    public function exportPDF(Request $request)
    {
    $type = $request->input('type');
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    $transactions = $this->getTransactions($type, $startDate, $endDate);

    $pdf = PDF::loadView('reports.pdf', compact('transactions', 'type', 'startDate', 'endDate'));
    return $pdf->download('report.pdf');
    }

    public function exportCSV(Request $request)
    {
        $type = $request->input('type');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
    
        return Excel::download(new ReportExport($type, $startDate, $endDate), 'report.csv');
    }
}
