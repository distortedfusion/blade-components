<div data-slot="avatar" data-size="{{ $size }}" {{ $attributes->class([
    'block relative overflow-hidden aspect-square',
    'bg-[var(--muted)] text-[var(--muted-foreground)]',
    'ring-1 ring-[var(--background)]',

    // Border element, will be overlain with the image.
    'after:content-[\'\'] after:absolute after:inset-0 after:border after:border-[var(--border)]',

    'rounded-[var(--radius)] after:rounded-[var(--radius)]' => ! $circle,
    'rounded-full after:rounded-full' => $circle,

    '[&_[data-slot=icon]]:size-4 w-10' => $size === 'lg',
    '[&_[data-slot=icon]]:size-4 w-9' => $size === 'default',
    '[&_[data-slot=icon]]:size-4 w-8' => $size === 'sm',
    '[&_[data-slot=icon]]:size-3 w-6' => $size === 'xs',
]) }}>
    <div class="absolute inset-0">
        <div class="flex items-center justify-center absolute inset-0">
            @if(is_string($icon) && ! is_null($icon))
                <x-dynamic-component :component="$icon" data-slot="icon" />
            @elseif($icon ?? false)
                {{ $icon }}
            @endif
        </div>

        @if($src)
            <img class="absolute inset-0 size-full object-cover"
                src="{{ $src }}"
                @if(! is_null($srcset))
                srcset="{{ $srcset }}"
                @endif
                alt="{{ $alt }}"
                />
        @endif
    </div>
</div>
