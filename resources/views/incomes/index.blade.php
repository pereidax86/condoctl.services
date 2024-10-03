@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ingresos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @can('manage incomes')
        <a href="{{ route('incomes.create') }}" class="btn btn-primary">Agregar Ingreso</a>
    @endcan

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
            @foreach($incomes as $income)
                <tr>
                    <td>{{ $income->description }}</td>
                    <td>{{ $income->amount }}</td>
                    <td>{{ $income->date }}</td>
                    <td>
                        <a href="{{ route('incomes.edit', $income) }}" class="btn btn-warning">Editar</a>
                        
                        <!-- Formulario de eliminación -->
                        @can('manage incomes')
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $income->id }}">
                            Eliminar
                        </button>

                        <!-- Modal de confirmación de eliminación -->
                        <div class="modal fade" id="deleteModal{{ $income->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Eliminar Ingreso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('incomes.destroy', $income) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <div class="form-group">
                                                <label for="reason">Razón para eliminar este ingreso:</label>
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
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
