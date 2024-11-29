<div {{ $attributes->class([
    'flex items-start px-2 py-1 border space-x-2',
    'rounded-lg' => ! Str::contains($attributes->get('class'), ['rounded']),
    'text-gray-700 dark:text-gray-400 bg-black/5 dark:bg-white/5 border-black/10 dark:border-white/10' => $type === 'default',
    'text-green-700 dark:text-green-400 bg-green-50/95 dark:bg-green-500/10 border-green-500/50 dark:border-green-500/50' => $type === 'success',
    'text-blue-700 dark:text-blue-400 bg-blue-50/95 dark:bg-blue-500/10 border-blue-500/50 dark:border-blue-500/50' => $type === 'info',
    'text-amber-700 dark:text-amber-400 bg-amber-50/95 dark:bg-amber-500/10 border-amber-500/50 dark:border-amber-500/50' => $type === 'warning',
    'text-red-700 dark:text-red-400 bg-red-50/95 dark:bg-red-500/10 border-red-500/50 dark:border-red-500/50' => $type === 'danger',
]) }} role="alert">
    <div {{ (new \Illuminate\View\ComponentAttributeBag)->class([
        'h-full my-1 p-2 flex-shrink-0 inline-block',
        'text-green-700 dark:text-green-500' => $type === 'success',
        'text-blue-700 dark:text-blue-500' => $type === 'info',
        'text-amber-700 dark:text-amber-500' => $type === 'warning',
        'text-red-700 dark:text-red-500' => $type === 'danger',
        'text-gray-700 dark:text-gray-500' => $type === 'default',
    ]) }}>
        <x-dynamic-component :component="$icon" class="w-4 h-4" />
    </div>

    <div class="text-sm leading-6">
        @if (! is_null($title))
            <div class="flex items-center flex-wrap">
                <div class="mt-2 font-semibold mr-2">{{ $title }}</div>
                <div class="my-2">{{ $slot }}</div>
            </div>
        @else
            <div class="my-2">{{ $slot }}</div>
        @endif
    </div>
</div>
