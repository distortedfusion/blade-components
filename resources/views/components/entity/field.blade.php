<div {{ $attributes }}>
    <x-heading :as-heading="false" size="flex" class="text-sm truncate">{{ $slot }}</x-heading>
    @if($description ?? false)
        <div {{ $description->attributes->class([
            '[&_p]:text-[var(--muted-foreground)]',
        ]) }}>
            {{ $description }}
        </div>
    @endif
</div>
