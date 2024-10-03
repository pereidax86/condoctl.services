@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Egresos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('expenses.create') }}" class="btn btn-primary">Agregar Egreso</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>
                        <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-warning">Editar</a>
                        
                        <!-- Formulario de eliminación -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $expense->id }}">
                            Eliminar
                        </button>

                        <!-- Modal de confirmación de eliminación -->
                        <div class="modal fade" id="deleteModal{{ $expense->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Eliminar Egreso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('expenses.destroy', $expense) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <div class="form-group">
                                                <label for="reason">Razón para eliminar este egreso:</label>
                                                <input type="text" name="reason" class="form-control" required>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
