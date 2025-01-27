@extends('layouts.app')

@section('title', 'System Configuration')

@section('content')
<div class="container">
    <h4 class="mb-4">System Configuration</h4>

    <!-- Mensaje de Éxito -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mensajes de Error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de Configuración -->
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Configuration</h4>
            <p class="card-category">Update your system settings below</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('config.update') }}">
                @csrf

                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Inputs Generados Dinámicamente -->
                            @foreach ($env as $key => $value)
                                <tr>
                                    <td><label for="{{ $key }}">{{ $key }}</label></td>
                                    <td>
                                        <input type="text" class="form-control" id="{{ $key }}" name="{{ $key }}" value="{{ $value }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Botón de Guardar -->
                <button type="submit" class="btn btn-primary mt-4">
                    <i class="material-symbols-outlined">save</i> Save Changes
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
