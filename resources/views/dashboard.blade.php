@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($welcome))
        <!-- Vista para usuarios que no son SysAdmin o Admin -->
        <div class="alert alert-success">
            <h1>Bienvenido, {{ Auth::user()->name }}!</h1>
            <p>Te has autenticado correctamente.</p>
        </div>
    @else
        <!-- Vista para SysAdmin y Admin mostrando los estados financieros -->
        <h1>Estado Financiero del Condominio</h1>

        <div class="card mb-4">
            <div class="card-header">Resumen Financiero</div>
            <div class="card-body">
                <p><strong>Total de Ingresos:</strong> ${{ number_format($totalIncomes, 2) }}</p>
                <p><strong>Total de Egresos:</strong> ${{ number_format($totalExpenses, 2) }}</p>
                <p><strong>Balance Neto:</strong> ${{ number_format($balance, 2) }}</p>
            </div>
        </div>
    @endif
</div>
@endsection
