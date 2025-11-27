<dl {{ $attributes->class([
    'space-y-1',
]) }}>
    <dt class="text-[var(--muted-foreground)] text-sm">{{ $title }}</dt>
    <dd>{{ $slot }}</dd>
</dl>
