@if (! is_null($action) && $show)
    <form method="POST" action="{{ $action }}">
        @csrf
        @method($method)

        @foreach ($inputs as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach

        <button type="submit" {{ $attributes->merge(['class' => 'dropdown-item text-left']) }}>
            {{ $slot }}
        </button>
    </form>
@endif

@if (is_null($action) && $show)
    <hr class="my-2">
@endif
