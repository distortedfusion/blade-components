<div {{ $attributes->class([
    'card border rounded-lg',
    'bg-white',
    'border-black/10' => is_null($style) || ! in_array($style, ['warning', 'danger']),
    'border-amber-200' => $style === 'warning',
    'border-red-200' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
