@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
    <h4 class="mb-4">Users Management</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-4">
        <i class="material-symbols-outlined">add</i> Add User
    </a>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Users</h4>
            <p class="card-category">Manage your users here</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">
                                        <i class="material-symbols-outlined">edit</i> Edit
                                    </a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="material-symbols-outlined">delete</i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $users->links() }} <!-- Paginación -->
            </div>
        </div>
    </div>
</div>
@endsection
