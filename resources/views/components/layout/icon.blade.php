<div {{ $attributes->class([
    'inline-flex items-center justify-center border rounded aspect-square',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-8' => $size === 'sm',

    // Primary color...
    'bg-brand-600 border-brand-600 text-brand-100' => $style === 'primary',

    // Secondary color...
    'bg-white border-gray-300 text-brand-700' => $style === 'secondary',

    // Tertiary color...
    'bg-white border-black/10 text-gray-400' => $style === 'tertiary',
]) }}>
    <x-dynamic-component :component="$icon" class="w-4 h-4" />
</div>
