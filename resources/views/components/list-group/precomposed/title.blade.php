@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<div {{ $attributes->class([
    'flex flex-wrap flex-col md:flex-row items-baseline',
]) }}>
    <div class="md:w-32 md:flex-shrink-0 md:mr-2">
        <x-dynamic-component
            :component="BladeComponents::componentAliasWithPrefix('paragraph')"
            style="muted"
            size="sm">
            {!! $title !!}
        </x-dynamic-component>
    </div>

    {{ $slot }}
</div>
