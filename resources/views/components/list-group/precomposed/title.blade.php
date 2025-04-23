<div {{ $attributes->class([
    'flex flex-wrap flex-col md:flex-row items-start',
]) }}>
    <div class="md:w-32 md:flex-shrink-0 md:mr-2">
        <span class="font-semibold text-[var(--muted-foreground)]">{!! $title !!}</span>
    </div>

    {{ $slot }}
</div>
