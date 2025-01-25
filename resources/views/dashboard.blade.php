@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Bienvenido, {{ Auth::user()->name }}.
                    <br>
                    Esta es la página principal después de iniciar sesión.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
