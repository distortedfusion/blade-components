<div {{ $attributes->class([
    'w-full',
    'h-4' => $size === 'lg',
    'h-2' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'h-1' => $size === 'sm',
]) }}>
    <div class="w-full h-full bg-gray-100 rounded-full overflow-hidden relative">
        <div class="bg-brand-500 absolute inset-y-0 left-0 transition-all ease-out" style="width: {{ $progress }}%;"></div>
    </div>
</div>
