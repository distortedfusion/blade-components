<div {{ $attributes->class([
    'text-sm text-black dark:text-white',
]) }}>
    <div class="font-semibold">{{ $slot }}</div>
    @if($description ?? false)
        <div {{ $description->attributes->class([
            'text-gray-600 dark:text-gray-400',
        ]) }}>{{ $description }}</div>
    @endif
</div>
