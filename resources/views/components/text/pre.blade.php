<pre {{ $attributes->class([
    'rounded-lg overflow-scroll',
    'bg-gray-100 dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
    'text-sm font-mono',
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>{{ $slot }}</pre>
