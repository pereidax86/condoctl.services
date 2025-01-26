<a href="{{ $href }}" class="btn {{ $class ?? 'blue' }}">
    <i class="material-icons left">{{ $icon ?? 'add' }}</i>
    {{ $slot }}
</a>
