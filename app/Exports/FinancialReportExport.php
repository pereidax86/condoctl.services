<?php 

namespace App\Exports;

use App\Models\Income;
use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FinancialReportExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Puedes combinar los ingresos y egresos en una colección para exportar
        return Income::select('description', 'amount', 'date')->get()
            ->concat(Expense::select('description', 'amount', 'date')->get());
    }

    public function headings(): array
    {
        return ['Descripción', 'Monto', 'Fecha'];
    }
}
