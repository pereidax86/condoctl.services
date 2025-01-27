@extends('layouts.app')

@section('title', 'Audit Logs')

@section('content')
<div class="container">
    <h4 class="mb-4">Audit Logs</h4>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Audit Logs</h4>
            <p class="card-category">View all audit logs here</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Action</th>
                            <th>Route</th>
                            <th>Data</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->id }}</td>
                                <td>{{ $log->email ?? 'Guest' }}</td>
                                <td>{{ $log->action }}</td>
                                <td>{{ $log->route }}</td>
                                <td>
                                    <pre>{{ json_encode($log->data, JSON_PRETTY_PRINT) }}</pre>
                                </td>
                                <td>{{ $log->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $logs->links() }} <!-- Paginación -->
            </div>
        </div>
    </div>
</div>
@endsection
