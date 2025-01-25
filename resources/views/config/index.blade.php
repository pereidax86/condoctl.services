@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Configuration</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('config.update') }}">
        @csrf

        @foreach($env as $key => $value)
            <div class="mb-3">
                <label for="{{ $key }}" class="form-label">{{ $key }}</label>
                <input type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}" class="form-control">
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
