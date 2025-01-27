@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit User: {{ $user->name }}</h4>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit User: {{ $user->name }}</h4>
            <p class="card-category">Update the information below</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name" class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email" class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="password" class="bmd-label-floating">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <small class="form-text text-muted">Leave blank to keep the current password.</small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="bmd-label-floating">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <h5>Assign Roles</h5>
                @foreach ($roles as $role)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->name }}"
                                {{ in_array($role->name, $userRoles) ? 'checked' : '' }}>
                            {{ $role->name }}
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                @endforeach

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="material-symbols-outlined">save</i> Save Changes
                    </button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        <i class="material-symbols-outlined">cancel</i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
