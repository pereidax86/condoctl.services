@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Egreso</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('expenses.update', $expense) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="description">Descripción:</label>
            <input type="text" name="description" class="form-control" value="{{ old('description', $expense->description) }}" required>
        </div>

        <div class="form-group">
            <label for="amount">Cantidad:</label>
            <input type="number" name="amount" class="form-control" step="0.01" value="{{ old('amount', $expense->amount) }}" required>
        </div>

        <div class="form-group">
            <label for="date">Fecha:</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $expense->date) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Egreso</button>
    </form>
</div>
@endsection
