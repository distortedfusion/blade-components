<div {{ $attributes }}>
    <x-heading :as-heading="false" size="flex" class="text-sm truncate">{{ $slot }}</x-heading>
    @if($description ?? false)
        <div {{ $description->attributes }}>
            {{ $description }}
        </div>
    @endif
</div>
