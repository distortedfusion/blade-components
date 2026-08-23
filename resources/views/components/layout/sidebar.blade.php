@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['sticky' => false, 'fixed' => false])
<x-dynamic-component
    :component="BladeComponents::componentAliasWithPrefix('sidebar-backdrop')" />

<ddfsn-sidebar data-slot="sidebar" {{ $attributes->class([
    '[grid-area:sidebar]' => ! $fixed,
    'flex flex-col gap-4 z-20',
    'bg-[var(--sidebar)] [:where(&)]:w-[var(--sidebar-width,16rem)] [:where(&)]:p-4',

    'max-h-dvh overflow-x-hidden overscroll-contain' => $sticky || $fixed,
    'min-h-dvh fixed start-0 inset-y-0' => $fixed,

    'data-ddfsn-sidebar-breakpoint-down:data-ddfsn-sidebar-collapsed:-translate-x-full',
    'data-ddfsn-sidebar-breakpoint-down:start-0!',
    'data-ddfsn-sidebar-breakpoint-down:fixed!',
    'data-ddfsn-sidebar-breakpoint-down:top-0!',
    'data-ddfsn-sidebar-breakpoint-down:min-h-dvh!',
    'data-ddfsn-sidebar-breakpoint-down:max-h-dvh!',

    'not-data-ddfsn-sidebar-cloak:transition-transform',

    'max-lg:data-ddfsn-sidebar-cloak:hidden',
]) }}
@if($sticky) sticky @endif
@if($fixed) fixed @endif
data-ddfsn-sidebar-cloak
x-data>
    {{ $slot }}
</ddfsn-sidebar>
