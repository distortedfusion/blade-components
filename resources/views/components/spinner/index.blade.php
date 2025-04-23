@props(['size' => null])
<div {{ $attributes->class([
    'inline-flex items-center',

    'size-8' => $size === 'lg',
    'size-4' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'size-2' => $size === 'sm',
]) }}>
    <div class="animate-spin w-full h-auto aspect-square border-2 border-[var(--border)] border-t-[var(--primary)] rounded-full"></div>
</div>
