<div {{ $attributes->class([
    'w-4' => $size === 'lg',
    'w-2' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-1' => $size === 'sm',
]) }}>
    <div class="w-full h-hull bg-gray-100 rounded-full overflow-hidden relative">
        <div class="bg-brand-500 absolute inset-y-0 left-0 transition-all ease-out" style="width: {{ $progress }}%;"></div>
    </div>
</div>
