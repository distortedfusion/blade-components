<x-badge {{ $attributes }}>
    <x-field.boolean class="-ml-1 mr-2" :state="$state ?? true" />
    <span>{{ $slot }}</span>
</x-badge>
