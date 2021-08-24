<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    <button type="submit" {{ $attributes->merge(['class' => sprintf('btn btn-%s', $type)]) }}>
        {{ $slot }}
    </button>
</form>
