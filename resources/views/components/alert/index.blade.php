<div {{ $attributes->class([
    'flex items-center p-2 rounded border',
    'bg-green-50 border-green-100' => $type === 'success',
    'bg-blue-50 border-blue-100' => $type === 'info',
    'bg-yellow-50 border-yellow-100' => $type === 'warning',
    'bg-red-50 border-red-100' => $type === 'danger',
    'bg-gray-50 border-gray-100' => $type === 'default',
]) }} role="alert">
    <div {{ (new \Illuminate\View\ComponentAttributeBag)->class([
        'h-full p-2 rounded flex-shrink-0 inline-block',
        'bg-green-100 text-green-600' => $type === 'success',
        'bg-blue-100 text-blue-600' => $type === 'info',
        'bg-yellow-100 text-yellow-600' => $type === 'warning',
        'bg-red-100 text-red-600' => $type === 'danger',
        'bg-gray-100 text-gray-600' => $type === 'default',
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
