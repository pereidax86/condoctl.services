@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Welcome, {{ Auth::user()->name }}</span>
                <p>This is the main dashboard. Use the sidebar to navigate through the system.</p>
            </div>
        </div>
    </div>
</div>
@endsection
