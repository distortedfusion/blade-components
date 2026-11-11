@props(['title', 'description' => null, 'icon' => null, 'wrap' => false])
@php
use DistortedFusion\BladeComponents\BladeComponents;
use Illuminate\View\ComponentAttributeBag;
@endphp
<div {{ $attributes->class([
    'flex gap-y-2 gap-x-3',
    'flex-wrap flex-col md:flex-row md:items-center' => $wrap,
    'flex-row items-center' => ! $wrap,
]) }}>
    <div {{ (new ComponentAttributeBag)->class([
        'flex items-center gap-x-3',
        'md:flex-1' => $wrap,
        'flex-1' => ! $wrap,
    ]) }}>
        @if (! is_null($icon))
            <x-dynamic-component
                :component="BladeComponents::componentAliasWithPrefix('layout.icon')"
                class="shrink-0"
                :icon="$icon"
                style="secondary"
                size="sm" />
        @endif
        <div class="flex-1">
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
    </div>

    {{ $slot }}
</div>
