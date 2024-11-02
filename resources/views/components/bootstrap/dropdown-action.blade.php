@if (! is_null($action) && $show)
    @if ($method === 'GET')
        <a href="{{ $action }}" class="dropdown-item text-gray-600 dark:text-gray-300">
            {{ $slot }}
        </a>
    @else
        <x-form :action="$action" :method="$method">
            @foreach ($inputs as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach

            <button type="submit" {{ $attributes->merge(['class' => 'dropdown-item text-gray-600 dark:text-gray-300 text-left']) }}>
                {{ $slot }}
            </button>
        </x-form>
    @endif
@endif

@if (is_null($action) && $show)
    <x-bootstrap.dropdown-separator />
@endif
