<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    <button type="submit" {{ $attributes->merge([
        'class' => Str::contains($attributes->get('class'), array_keys(\DistortedFusion\Tailwind\Contracts\ButtonContract::STYLES)) ? 'btn' : sprintf('btn %s', $buttonClass()),
    ]) }}>
        {{ $slot }}
    </button>
</form>
