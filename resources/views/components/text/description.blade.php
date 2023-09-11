<dl {{ $attributes->class([
    'space-y-1',
]) }}>
    <dt class="text-muted text-sm">{{ $title }}</dt>
    <dd class="text-muted text-base">{{ $slot }}</dd>
</dl>
