<div {{ $attributes->class([
    'inline-flex items-center border p-2 py-0.5 text-sm font-semibold rounded-md',

    // Badge sizes...
    // '' => $size === 'lg',
    // '' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    // '' => $size === 'sm',

    'text-green-900 border-green-200 bg-green-100' => $style === 'success',
    'text-blue-900 border-blue-200 bg-blue-100' => $style === 'info',
    'text-yellow-900 border-yellow-200 bg-yellow-100' => $style === 'warning',
    'text-red-900 border-red-200 bg-red-100' => $style === 'danger',
    'text-gray-900 border-gray-200 bg-gray-100' => $style === 'default',
]) }} role="alert">
    @if($prefix ?? false)
        <div class="flex-shrink-0">{{ $prefix }}</div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
    @if($suffix ?? false)
        <div class="flex-shrink-0">{{ $suffix }}</div>
    @endif
</div>
