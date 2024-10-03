<?php

namespace App\Exports;

use App\Models\Income;
use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, WithHeadings
{
    protected $type, $startDate, $endDate;

    public function __construct($type, $startDate, $endDate)
    {
        $this->type = $type;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        if ($this->type == 'income') {
            return Income::whereBetween('date', [$this->startDate, $this->endDate])->get();
        } elseif ($this->type == 'expense') {
            return Expense::whereBetween('date', [$this->startDate, $this->endDate])->get();
        } else {
            return Income::whereBetween('date', [$this->startDate, $this->endDate])
                         ->union(Expense::whereBetween('date', [$this->startDate, $this->endDate]))
                         ->get();
        }
    }

    public function headings(): array
    {
        return ['Descripción', 'Cantidad', 'Fecha'];
    }
}
