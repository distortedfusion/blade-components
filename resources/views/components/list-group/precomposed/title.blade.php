@props(['title', 'description' => null])
@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<div {{ $attributes->class([
    'flex flex-wrap flex-col md:flex-row items-center gap-y-2 gap-x-3',
]) }}>
    <div class="md:flex-1">
        <x-dynamic-component
            :component="BladeComponents::componentAliasWithPrefix('paragraph')"
            class="font-medium"
            size="sm">
            {!! $title !!}
        </x-dynamic-component>
        @if (! is_null($description))
            <x-dynamic-component
                :component="BladeComponents::componentAliasWithPrefix('paragraph')"
                style="muted"
                size="xs">
                {!! $description !!}
            </x-dynamic-component>
        @endif
    </div>

    {{ $slot }}
</div>
