@props(['exclusive' => false, 'transition' => true])
<div data-slot="accordion" x-data="{
    active: null,
    exclusive: {{ var_export($exclusive, true) }},
    transition: {{ var_export($transition, true) }}
}" {{ $attributes->class([
    'w-full divide-y divide-black/10 dark:divide-white/10',
]) }}>
    {{ $slot }}
</div>
