<div {{ $attributes->class([
    'block relative rounded-full overflow-hidden aspect-square m-px p-px',
    'bg-[var(--secondary)] text-[var(--secondary-foreground)]',
    'after:content-[\'\'] after:absolute after:inset-0 after:rounded-full after:border after:border-[var(--border)]',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['xs', 'sm', 'lg']),
    'w-8' => $size === 'sm',
    'w-6' => $size === 'xs',
]) }}>
    <div class="absolute inset-0">
        @if(! is_null($icon))
            <div class="flex items-center justify-center absolute inset-0">
                <x-dynamic-component :component="$icon" class="size-4" />
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
