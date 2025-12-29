@props(['progress' => 0, 'size' => 'default'])
<div {{ $attributes->class([
    'w-full',
    'h-4' => $size === 'lg',
    'h-2' => $size === 'default',
    'h-1' => $size === 'sm',
]) }}>
    <div class="w-full h-full bg-[var(--secondary)] rounded-full overflow-hidden relative">
        <div class="bg-[var(--primary)] absolute inset-y-0 left-0 transition-all ease-out" style="width: {{ $progress }}%;"></div>
    </div>
</div>
