@props(['progress' => 0, 'size' => null])
<div {{ $attributes->class([
    'w-full',
    'h-4' => $size === 'lg',
    'h-2' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'h-1' => $size === 'sm',
]) }}>
    <div class="w-full h-full bg-[var(--secondary)] rounded-full overflow-hidden relative">
        <div class="bg-[var(--primary)] absolute inset-y-0 left-0 transition-all ease-out" style="width: {{ $progress }}%;"></div>
    </div>
</div>
