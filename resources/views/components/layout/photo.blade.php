<div {{ $attributes->class([
    'inline-flex items-center justify-center relative rounded overflow-hidden aspect-square',
    'bg-gray-100' => ! Str::contains($attributes->get('class'), 'bg-'),
    'text-gray-700' => ! Str::contains($attributes->get('class'), 'text-'),
    'm-px' => ! Str::contains($attributes->get('class'), 'm-'),
    'p-px' => ! Str::contains($attributes->get('class'), 'p-'),

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-8' => $size === 'sm',
]) }}>
    <div class="absolute inset-0">
        <div class="flex items-center justify-center absolute inset-0">
            <x-dynamic-component :component="$icon" class="w-4 h-4" />
        </div>

        @if($url)
            <div class="bg-cover bg-center absolute inset-0"
                role="img"
                style="{{ $getPhotoStyle() }}">
            </div>
        @endif
    </div>
</div>
