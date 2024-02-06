<div {{ $attributes->class([
    'inline-flex relative rounded-full overflow-hidden aspect-square m-px p-px',
    'bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10',
    'text-gray-600 dark:text-gray-300',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-8' => $size === 'sm',
]) }}>
    <div class="absolute inset-0">
        <div class="flex items-center justify-center absolute inset-0">
            <x-dynamic-component :component="$icon" class="w-4 h-4" />
        </div>

        @if($url)
            <div class="bg-cover bg-center absolute inset-0"
                role="img"
                style="{{ $getPhotoStyle() }}">
            </div>
        @endif
    </div>
</div>
