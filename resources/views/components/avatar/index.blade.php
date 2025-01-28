@props(['src' => null, 'srcset' => null, 'alt' => null, 'icon' => 'heroicon-o-user', 'size' => null])
<div {{ $attributes->class([
    'block relative rounded-full overflow-hidden aspect-square m-px p-px',
    'bg-black/5 dark:bg-white/5 ring-1 ring-inset ring-black/10 dark:ring-white/10',
    'text-gray-800 dark:text-gray-100',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['xs', 'sm', 'lg']),
    'w-8' => $size === 'sm',
    'w-6' => $size === 'xs',
]) }}>
    <div class="absolute inset-0">
        @if(! is_null($icon))
            <div class="flex items-center justify-center absolute inset-0">
                <x-dynamic-component :component="$icon" class="w-4 h-4" />
            </div>
        @endif

        @if($src)
            <img class="absolute inset-0 object-contain"
                src="{{ $src }}"
                @if(! is_null($srcset))
                srcset="{{ $srcset }}"
                @endif
                alt="{{ $alt }}"
                />
        @endif
    </div>
</div>
