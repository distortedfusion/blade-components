<div {{ $attributes->class([
    'inline-flex items-center justify-center rounded aspect-square',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-8' => $size === 'sm',

    // Primary color...
    'bg-brand-600 text-brand-100' => $style === 'primary',

    // Default color...
    'bg-gray-600 text-gray-600' => $style === 'default',
]) }}>
    <x-dynamic-component :component="$icon" />
</div>
