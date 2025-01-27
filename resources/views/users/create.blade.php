@extends('layouts.app')

@section('title', 'Add User')

@section('content')
<div class="container">
    <h4 class="mb-4">Add New User</h4>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add New User</h4>
            <p class="card-category">Complete the form below</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email" class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password" class="bmd-label-floating">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="bmd-label-floating">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <h5>Assign Roles</h5>
                @foreach ($roles as $role)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->name }}">
                            {{ $role->name }}
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary mt-4">
                    <i class="material-icons">save</i> Save
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
