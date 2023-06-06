<div {{ $attributes->class([
    'flex items-start px-2 py-1 border space-x-2',
    'rounded' => ! Str::contains($attributes->get('class'), ['rounded']),
    'bg-green-50 border-green-100' => $type === 'success',
    'bg-blue-50 border-blue-100' => $type === 'info',
    'bg-yellow-50 border-yellow-100' => $type === 'warning',
    'bg-red-50 border-red-100' => $type === 'danger',
    'bg-gray-50 border-gray-100' => $type === 'default',
]) }} role="alert">
    <div {{ (new \Illuminate\View\ComponentAttributeBag)->class([
        'h-full my-1 p-2 rounded flex-shrink-0 inline-block',
        'bg-green-100 text-green-600' => $type === 'success',
        'bg-blue-100 text-blue-600' => $type === 'info',
        'bg-yellow-100 text-yellow-600' => $type === 'warning',
        'bg-red-100 text-red-600' => $type === 'danger',
        'bg-gray-100 text-gray-600' => $type === 'default',
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
