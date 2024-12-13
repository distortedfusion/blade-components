<div data-slot="card-header" {{ $attributes->class([
    'flex items-center space-x-2 rounded-t-lg',
    // 'border-b border-black/10' => ! Str::contains($attributes->get('class'), ['border-']),
    'px-4 sm:px-6',
    'py-4',
]) }}>
    <div class="flex-grow">{{ $slot }}</div>
    @if($action ?? false)
        <div class="flex-shrink-0 flex items-center space-x-2">
            {{ $action }}
        </div>
    @endif
</div>
