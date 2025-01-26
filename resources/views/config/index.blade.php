@extends('layouts.app')

@section('title', 'System Configuration')

@section('content')
<div class="container">
    <h4 class="mb-4">System Configuration</h4>

    <!-- Mensaje de Éxito -->
    @if(session('success'))
        <div class="card-panel green white-text">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mensajes de Error -->
    @if ($errors->any())
        <div class="card-panel red white-text">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de Configuración -->
    <div class="card">
        <div class="card-content">
            <span class="card-title">Edit Configuration</span>

            <form method="POST" action="{{ route('config.update') }}">
                @csrf

                <!-- Inputs Generados Dinámicamente -->
                @foreach ($env as $key => $value)
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="{{ $key }}" name="{{ $key }}" value="{{ $value }}" class="validate">
                            <label for="{{ $key }}">{{ $key }}</label>
                        </div>
                    </div>
                @endforeach

                <!-- Botón de Guardar -->
                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn blue">
                            <i class="material-icons left">save</i> Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
