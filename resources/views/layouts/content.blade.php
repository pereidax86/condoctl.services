@extends('layouts.app')

@section('title', 'Dashboard')
@section('section-title', 'Dashboard')

@section('content')
<div class="pf-l-grid pf-m-gutter">
    <!-- Ejemplo de Cards -->
    <div class="pf-l-grid__item pf-m-12-col pf-m-6-col-on-md pf-m-4-col-on-lg">
        <div class="pf-c-card">
            <div class="pf-c-card__header">
                <h2 class="pf-c-title pf-m-lg">Card 1</h2>
            </div>
            <div class="pf-c-card__body">
                <p>Información importante aquí.</p>
            </div>
        </div>
    </div>
    <div class="pf-l-grid__item pf-m-12-col pf-m-6-col-on-md pf-m-4-col-on-lg">
        <div class="pf-c-card">
            <div class="pf-c-card__header">
                <h2 class="pf-c-title pf-m-lg">Card 2</h2>
            </div>
            <div class="pf-c-card__body">
                <p>Más información aquí.</p>
            </div>
        </div>
    </div>
</div>
@endsection
