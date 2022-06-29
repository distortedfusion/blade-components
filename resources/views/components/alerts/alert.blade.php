<div {{ $attributes->class([
    'flex items-center p-2 rounded',
    'bg-green-50' => $type === 'success',
    'bg-blue-50' => $type === 'info',
    'bg-yellow-50' => $type === 'warning',
    'bg-red-50' => $type === 'danger',
    'bg-gray-50' => $type === 'default',
]) }} role="alert">
    <div {{ (new \Illuminate\View\ComponentAttributeBag)->class([
        'h-full p-2 rounded flex-shrink-0 inline-block',
        'bg-green-200 text-green-500' => $type === 'success',
        'bg-blue-200 text-blue-500' => $type === 'info',
        'bg-yellow-200 text-yellow-500' => $type === 'warning',
        'bg-red-200 text-red-500' => $type === 'danger',
        'bg-gray-200 text-gray-500' => $type === 'default',
    ]) }}>
        <x-dynamic-component :component="$icon" />
    </div>

    <div class="ml-2 inline-flex divide-x divide-current space-x-2">
        @if (! is_null($title))
            <span class="font-semibold">{{ $title }}</span>
            <span class="pl-2">{{ $slot }}</span>
        @else
            <span>{{ $slot }}</span>
        @endif
    </div>
</div>
