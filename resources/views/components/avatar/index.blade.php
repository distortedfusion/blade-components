<div data-slot="avatar" {{ $attributes->class([
    'block relative rounded-full overflow-hidden aspect-square',
    'bg-[var(--secondary)] text-[var(--muted-foreground)]',
    'ring-1 ring-[var(--background)]',

    // Border element, will be overlain with the image.
    'before:content-[\'\'] before:absolute before:inset-0 before:rounded-full before:border before:border-[var(--border)]',

    '[&_[data-slot=icon]]:size-4 w-12' => $size === 'lg',
    '[&_[data-slot=icon]]:size-4 w-10' => is_null($size),
    '[&_[data-slot=icon]]:size-4 w-8' => $size === 'sm',
    '[&_[data-slot=icon]]:size-3 w-6' => $size === 'xs',
]) }}>
    <div class="absolute inset-0">
        @if(! is_null($icon))
            <div class="flex items-center justify-center absolute inset-0">
                <x-dynamic-component :component="$icon" data-slot="icon" />
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
