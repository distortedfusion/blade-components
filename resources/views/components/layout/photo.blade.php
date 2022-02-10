<div {{ $attributes->class([
    'overflow-hidden relative block rounded',
    'bg-gray-100' => ! Str::contains($attributes->get('class'), 'bg-'),
    'text-muted' => ! Str::contains($attributes->get('class'), 'text-'),
    'm-px' => ! Str::contains($attributes->get('class'), 'm-'),
    'p-px' => ! Str::contains($attributes->get('class'), 'p-'),
    'w-10' => ! Str::contains($attributes->get('class'), 'w-'),
    'h-10' => ! Str::contains($attributes->get('class'), 'h-'),
]) }}>
    <div class="absolute inset-0">
        <div class="flex items-center justify-center absolute inset-0">
            <i class="fad {{ $icon }}"></i>
        </div>

        @if($url)
            <div class="bg-cover bg-center absolute inset-0"
                role="img"
                style="{{ $getPhotoStyle() }}">
            </div>
        @endif
    </div>
</div>
