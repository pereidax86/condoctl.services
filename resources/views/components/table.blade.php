<div class="card">
    <div class="card-content">
        <span class="card-title">{{ $title ?? 'Table' }}</span>
        <table class="striped">
            <thead>
                <tr>
                    @foreach ($columns as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
