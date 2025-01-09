<div {{ $attributes->class([
    'flex flex-wrap flex-col md:flex-row items-start',
]) }}>
    <div class="md:w-1/3 md:flex-shrink-0 md:mr-2">
        <span class="font-semibold text-gray-600 dark:text-gray-300">{!! $title !!}</span>
    </div>

    {{ $slot }}
</div>
