@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estado Financiero</h1>

    <!-- Formulario de filtro por fecha -->
    <form action="{{ route('financial_states.index') }}" method="GET" class="mb-4">
        <div class="form-row">
            <div class="col">
                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}" placeholder="Fecha de inicio">
            </div>
            <div class="col">
                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}" placeholder="Fecha de fin">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <!-- Mostrar el resumen financiero -->
    <div class="card mb-4">
        <div class="card-header">Resumen Financiero</div>
        <div class="card-body">
            <p><strong>Total de Ingresos:</strong> ${{ number_format($totalIncomes, 2) }}</p>
            <p><strong>Total de Egresos:</strong> ${{ number_format($totalExpenses, 2) }}</p>
            <p><strong>Balance Neto:</strong> ${{ number_format($balance, 2) }}</p>
        </div>
    </div>

    <!-- Listado de Ingresos -->
    <div class="card mb-4">
        <div class="card-header">Ingresos</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($incomes as $income)
                    <li class="list-group-item">
                        {{ $income->description }} - ${{ number_format($income->amount, 2) }} ({{ $income->date }})
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Listado de Egresos -->
    <div class="card mb-4">
        <div class="card-header">Egresos</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($expenses as $expense)
                    <li class="list-group-item">
                        {{ $expense->description }} - ${{ number_format($expense->amount, 2) }} ({{ $expense->date }})
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Botones de exportación -->
    <a href="#" class="btn btn-success">Exportar a PDF</a>
    <a href="#" class="btn btn-secondary">Exportar a CSV</a>
</div>
@endsection
