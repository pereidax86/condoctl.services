@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Generar Reporte</h1>

    <form action="{{ route('reports.generate') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="type">Tipo de Transacción:</label>
            <select name="type" class="form-control" required>
                <option value="income">Ingresos</option>
                <option value="expense">Egresos</option>
                <option value="both">Ambos</option>
            </select>
        </div>

        <div class="form-group">
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Generar Reporte</button>
    </form>
</div>
@endsection
