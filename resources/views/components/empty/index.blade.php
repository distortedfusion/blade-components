@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['title', 'description' => null, 'icon' => null])
<div data-slot="empty" {{ $attributes->class([
    'min-w-0 flex flex-1 flex-col items-center justify-center gap-6 p-6 md:p-12 rounded-[var(--radius)]',
    'border border-[var(--border)] border-dashed',

    'text-center text-balance',

    '[&_p]:text-[var(--muted-foreground)] [&_p]:text-sm',
    '[&_a:hover:not([data-slot=button])]:text-[var(--primary)] [&_a:not([data-slot=button])]:underline [&_a:not([data-slot=button])]:underline-offset-4',
]) }}>
    <div data-slot="empty-header" class="flex max-w-md flex-col items-center gap-2 text-center [&>[data-slot=heading]:not(:first-child)]:mt-2">
        @if(is_string($icon) && ! is_null($icon))
            <x-dynamic-component
                :component="BladeComponents::componentAliasWithPrefix('layout.icon')"
                style="secondary"
                :icon="$icon" />
        @elseif($icon ?? false)
            {{ $icon }}
        @endif

        <x-dynamic-component
            :component="BladeComponents::componentAliasWithPrefix('heading')"
            :as-heading="false">
            {{ $title }}
        </x-dynamic-component>

        @if(is_string($description) && ! is_null($description))
            <x-dynamic-component :component="BladeComponents::componentAliasWithPrefix('paragraph')">
                {{ $description }}
            </x-dynamic-component>
        @elseif($description ?? false)
            {{ $description }}
        @endif
    </div>

    @if($slot->isNotEmpty())
        <div data-slot="empty-content" class="min-w-0 w-full max-w-md flex flex-col items-center gap-4 text-balance">
            {{ $slot }}
        </div>
    @endif
</div>
