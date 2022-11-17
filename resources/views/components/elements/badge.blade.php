<span {{ $attributes->class([
    'inline-flex items-center p-2 py-0.5 text-sm font-medium rounded-full',
    'bg-green-50' => $type === 'success',
    'bg-blue-50' => $type === 'info',
    'bg-yellow-50' => $type === 'warning',
    'bg-red-50' => $type === 'danger',
    'bg-gray-100' => $type === 'default',
]) }} role="alert">
    {{ $slot }}
</span>
