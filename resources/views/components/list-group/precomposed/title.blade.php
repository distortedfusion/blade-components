<div {{ $attributes->class([
    'flex flex-wrap flex-col md:flex-row items-start',
]) }}>
    <div class="md:w-32 md:flex-shrink-0 md:mr-2">
        <x-heading :heading-level="3" size="sm">{!! $title !!}</x-heading>
    </div>

    {{ $slot }}
</div>
