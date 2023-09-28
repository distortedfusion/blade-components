<div {{ $attributes->class([
    'text-center',
    'my-4' => ! Str::contains($attributes->get('class'), ['my-', 'mt-', 'mb-']),
]) }}>
    @if($title ?? false)
        <x-heading :heading-level="3">{{ $title }}</x-heading>
    @endif

    <p class="text-muted text-sm mt-1">
        {{ $slot }}
    </p>

    @if($action ?? false)
        <div class="mt-4">
            {{ $action }}
        </div>
    @endif
</div>
