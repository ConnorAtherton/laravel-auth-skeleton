@foreach (['error', 'alert', 'success', 'info'] as $type)
    @if (Session::get($type))
        <div class="alert alert-{{ $type }}">
            <p>{{ Session::get($type) }}</p>
        </div>
    @endif
@endforeach
