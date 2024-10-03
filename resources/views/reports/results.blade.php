@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados del Reporte</h1>

    <p><strong>Tipo de Transacción:</strong> {{ $type == 'income' ? 'Ingresos' : ($type == 'expense' ? 'Egresos' : 'Ambos') }}</p>
    <p><strong>Período:</strong> {{ $startDate }} a {{ $endDate }}</p>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ number_format($transaction->amount, 2) }}</td>
                    <td>{{ $transaction->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botones de exportación -->
    <a href="#" class="btn btn-success">Exportar a PDF</a>
    <a href="#" class="btn btn-secondary">Exportar a CSV</a>
</div>
@endsection
