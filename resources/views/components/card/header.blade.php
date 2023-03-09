<div {{ $attributes->class([
    'card-header flex items-center space-x-2 rounded-t',
    'border-b' => ! Str::contains($attributes->get('class'), ['border-']),
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-5' => ! Str::contains($attributes->get('class'), ['py-']),
]) }}>
    <div class="flex-grow">{{ $slot }}</div>
    @if($action ?? false)
        <div class="flex-shrink-0">
            {{ $action }}
        </div>
    @endif
</div>
