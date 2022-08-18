<pre {{ $attributes->class([
    'border rounded overflow-scroll font-mono',
    'text-sm' => ! Str::contains($attributes->get('class'), ['text-xs', 'text-sm', 'text-md', 'text-lg', 'text-xl', 'text-2xl']),
    'bg-gray-50' => ! Str::contains($attributes->get('class'), 'bg-'),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>{{ $slot }}</pre>
