<div {{ $attributes }}>
    <x-heading :as-heading="false" size="flex" class="text-sm min-w-0 truncate">{{ $slot }}</x-heading>
    @if($description ?? false)
        <div {{ $description->attributes }}>
            {{ $description }}
        </div>
    @endif
</div>
