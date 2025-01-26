@extends('layouts.app')

@section('title', 'Dashboard')
@section('section-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Ejemplo de Cards -->
    <div class="card bg-white shadow-md rounded-lg p-4">
        <h2 class="text-lg font-bold">Card 1</h2>
        <p>Información importante aquí.</p>
    </div>
    <div class="card bg-white shadow-md rounded-lg p-4">
        <h2 class="text-lg font-bold">Card 2</h2>
        <p>Más información aquí.</p>
    </div>
</div>
@endsection
