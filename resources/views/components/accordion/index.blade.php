@props(['exclusive' => false, 'transition' => true])
<div data-slot="accordion"
    {{ $attributes->class([
        'divide-y divide-black/10 dark:divide-white/10',
    ]) }}
    x-data="{
        active: null,
        exclusive: {{ var_export($exclusive, true) }},
        transition: {{ var_export($transition, true) }}
    }">
    {{ $slot }}
</div>
