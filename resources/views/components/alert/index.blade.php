<div {{ $attributes->class([
    'flex items-start px-2 py-1 border space-x-2',
    'rounded' => ! Str::contains($attributes->get('class'), ['rounded']),
    'bg-black/5 dark:bg-white/5 border-black/10 dark:border-white/10' => $type === 'default',
    'bg-green-50/95 dark:bg-green-500/10 border-green-500/50 dark:border-green-500/50' => $type === 'success',
    'bg-blue-50/95 dark:bg-blue-500/10 border-blue-500/50 dark:border-blue-500/50' => $type === 'info',
    'bg-amber-50/95 dark:bg-amber-500/10 border-amber-500/50 dark:border-amber-500/50' => $type === 'warning',
    'bg-red-50/95 dark:bg-red-500/10 border-red-500/50 dark:border-red-500/50' => $type === 'danger',
]) }} role="alert">
    <div {{ (new \Illuminate\View\ComponentAttributeBag)->class([
        'h-full my-1 p-2 flex-shrink-0 inline-block',
        'text-green-600' => $type === 'success',
        'text-blue-600' => $type === 'info',
        'text-amber-600' => $type === 'warning',
        'text-red-600' => $type === 'danger',
        'text-gray-700' => $type === 'default',
        'dark:text-gray-300' => $type === 'default',
    ]) }}>
        <x-dynamic-component :component="$icon" class="w-4 h-4" />
    </div>

    <div class="text-sm leading-6">
        @if (! is_null($title))
            <div class="flex items-center flex-wrap">
                <div class="mt-2 font-semibold mr-2">{{ $title }}</div>
                <div class="mt-2">{{ $slot }}</div>
            </div>
        @else
            <div class="mt-2">{{ $slot }}</div>
        @endif
    </div>
</div>
