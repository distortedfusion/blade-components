<div {{ $attributes }}>
    <x-heading :as-heading="false" size="flex" class="text-sm truncate">{{ $slot }}</x-heading>
    @if($description ?? false)
        <div {{ $description->attributes->class([
            '[&_p]:text-gray-600 dark:[&_p]:text-gray-400',
        ]) }}>
            {{ $description }}
        </div>
    @endif
</div>
