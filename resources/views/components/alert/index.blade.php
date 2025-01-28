<div {{ $attributes->class([
    'flex items-start px-2 py-1 border space-x-2',
    'rounded-lg' => ! Str::contains($attributes->get('class'), ['rounded']),

    'text-gray-700 dark:text-gray-400 bg-black/5 dark:bg-white/5 border-black/10 dark:border-white/10' => $style === 'default',
    'text-green-700 dark:text-green-400 bg-green-50/95 dark:bg-green-500/10 border-green-500/50 dark:border-green-500/50' => $style === 'success',
    'text-blue-700 dark:text-blue-400 bg-blue-50/95 dark:bg-blue-500/10 border-blue-500/50 dark:border-blue-500/50' => $style === 'info',
    'text-amber-700 dark:text-amber-400 bg-amber-50/95 dark:bg-amber-500/10 border-amber-500/50 dark:border-amber-500/50' => $style === 'warning',
    'text-red-700 dark:text-red-400 bg-red-50/95 dark:bg-red-500/10 border-red-500/50 dark:border-red-500/50' => $style === 'danger',
]) }} role="alert">
    @if(! is_null($icon))
        <div {{ (new \Illuminate\View\ComponentAttributeBag)->class([
            'h-full my-0.5 p-2 flex-shrink-0 inline-block',
            'text-green-700 dark:text-green-500' => $style === 'success',
            'text-blue-700 dark:text-blue-500' => $style === 'info',
            'text-amber-700 dark:text-amber-500' => $style === 'warning',
            'text-red-700 dark:text-red-500' => $style === 'danger',
            'text-gray-700 dark:text-gray-500' => $style === 'default',
        ]) }}>
            <x-dynamic-component :component="$icon" class="size-5" />
        </div>
    @endif

    <div class="text-sm leading-6">
        @if (! is_null($title))
            <div class="flex items-start flex-wrap">
                <div class="mt-2 font-semibold mr-2">{{ $title }}</div>
                <div class="my-2">{{ $slot }}</div>
            </div>
        @else
            <div class="my-2">{{ $slot }}</div>
        @endif
    </div>
</div>
