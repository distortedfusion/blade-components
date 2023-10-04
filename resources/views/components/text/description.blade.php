<dl {{ $attributes->class([
    'space-y-1',
]) }}>
    <dt class="text-gray-600 dark:text-gray-400 text-sm">{{ $title }}</dt>
    <dd class="text-base">{{ $slot }}</dd>
</dl>
