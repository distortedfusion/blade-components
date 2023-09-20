<div {{ $attributes->class([
    'card border rounded-lg',
    'bg-white',
    'border-black/10' => is_null($style) || ! in_array($style, ['warning', 'danger']),
    'border-amber-500' => $style === 'warning',
    'border-red-500' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
