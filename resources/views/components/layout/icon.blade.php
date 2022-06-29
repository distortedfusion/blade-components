<div {{ $attributes->merge(['class' => $iconContainerClass()]) }}>
    <x-dynamic-component :component="$icon" />
</div>
